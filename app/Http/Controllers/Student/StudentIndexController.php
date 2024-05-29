<?php

namespace App\Http\Controllers\Student;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class StudentIndexController extends Controller
{
    public function index() {
        
        $data = Book::orderBy('level')->get();

        return view('Users.student.pages.index', ['data'  => $data]);
    }

    public function view($category) {
        
        $bookCategory = $category;

        $books = Book::where('category', $category)->orderBy('title')->get();// Adjust the column to order by as needed
    
        $bookAttributes = Schema::getColumnListing('books');
    
        return view('Users.student.pages.Dashboard.viewCategory', [
            'books' => $books,
            'bookAttributes' => $bookAttributes,
            'bookCategory' => $bookCategory
        ]);
    }

    public function requestBook($id) {
        $requestBook = Book::findOrFail($id);

        return view('Users.student.pages.dashboard.requestBook', ['requestBook' => $requestBook]);
    }

    public function processBook(Request $request, $id) {
    
        $book = Book::find($id);
        $user = Auth::user();
    
        

        $existingTransaction = Transaction::where('user_id', $user->id)
                                        ->where('book_id', $book->id)
                                        ->where('status', 'pending')
                                        ->first();
    
        if ($existingTransaction) {
            // User has already requested the book
            return redirect()->back()->with('requestAlreadyTaken', 'You have already requested this book.');

        }else {

            if ($book->quantity > 0) {

                $transaction = Transaction::create([
                    'user_id' => $user->id,
                    'book_id' => $book->id,
                    'status' => 'pending',
                    'start_day' => null,
                    'start_time' => null,
                    'end_day' => null,
                    'duration' => null,
                    'overdue' => null,
                    'penalty' => null,
                ]);

                $book->decrement('quantity');

                if($book->quantity == 0) {
                    $book->update([
                        'status' => 'Unvailable',
                    ]);
                }

                $transaction->save();

                return redirect()->back()->with('successRequest', 'Sucessfully book requesting');
            }else {
                return redirect()->back()->with('errorRequest', 'Fail book requesting');
            }
        }
    }

    public function search(Request $request)
    {
        $search = $request->input('query');
        $attribute = $request->input('attribute');

        $results = Book::where($attribute, 'LIKE', "%{$search}%")->get();

        return response()->json($results);
    }
    public function fetchLevelBook(Request $request) {

        

        // Group books by level
        $book = Book::all()->groupBy('level');
        $groupBooks = $book->map(function ($bookByLevel){
            return $bookByLevel->groupBy('category');
        });

        return response()->json(['groupBooks' => $groupBooks]);
    }

    public function dashboard() {
        $book = Book::all()->groupBy('level');

        return view('Users.student.pages.dashboard.dashboard', ['book' => $book]);
    }
}
