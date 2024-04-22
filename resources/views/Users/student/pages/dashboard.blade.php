<x-student.dashboard-layout>

    {{-- SELECTION OF YEAR LEVEL --}}
    <x-slot name="selectYear">
      <div class="d-flex justify-content-center gap-2 px-4 ">
        <div class="form-floating w-100">
        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" onchange="fetchBooks(this.value)">
            <option disabled selected>Choose Year-level</option>
            <option value="College">College</option>
            <option value="Senior Highschool">Senior Highschool</option>
            <option value="Junior Highschool">Junior Highschool</option>
            <option value="Elementary">Elementary</option>
        </select>
          <label for="floatingSelect">Select Year-level</label>
        </div>
      </div>
    </x-slot>
    
    {{-- Book Displays --}}
    <x-slot name="bookDisplay">
      <x-student.dashboard.display-book  :booksGroupedByCategory="$booksGroupedByCategory"/> 
    </x-slot>

  {{-- <x-student.dashboard.displayBook /> --}}
</x-student.dashboard-layout>