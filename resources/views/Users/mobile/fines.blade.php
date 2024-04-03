@extends('mobile.layout.dashboard.dash_layout')
@section('mob-userFines')
<div class="d-flex align-items-center mt-3">
    <a href="{{ route('dashboard-college') }}">
        <svg style="color:#661011;" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 512 512">
            <rect width="512" height="512" fill="none" />
            <path fill="currentColor" d="M368 64L144 256l224 192z" />
        </svg>
    </a>
    <span class="fw-bold mx-auto">Fines</span>
</div>

<table class="mt-5">
    <tr>
        <th>No.</th>
        <th>Return Day</th>
        <th>Delay</th>
        <th>Penalty</th>
        <th></th>
      </tr>
      <tr>
        <td>1</td>
        <td>February 1, 2024</td>
        <td>1 Hour</td>
        <td>10 pesos</td>
        <td><a href="{{ route('mob-viewbookreturn') }}"><button>View</button></a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>February 2, 2024</td>
        <td>1 Hour</td>
        <td>10 pesos</td>
        <td><a href="{{ route('mob-viewbookreturn') }}"><button>View</button></a></td>
      </tr>
      <tr>
        <td>3</td>
        <td>February 3, 2024</td>
        <td>2 Hours</td>
        <td>20 pesos</td>
        <td><a href="{{ route('mob-viewbookreturn') }}"><button>View</button></a></td>
      </tr>
        <td>4</td>
        <td>February 4, 2024</td>
        <td>4 Hours</td>
        <td>20 pesos</td>
        <td><a href="{{ route('mob-viewbookreturn') }}"><button>View</button></a></td>
      </tr>
      <tr>
        <td>5</td>
        <td>February 5, 2024</td>
        <td>2 Hours</td>
        <td>20 pesos</td>
        <td><a href="{{ route('mob-viewbookreturn') }}"><button>View</button></a></td>
      </tr>
      <tr>
        <td>6</td>
        <td>February 6, 2024</td>
        <td>3 Hours</td>
        <td>30 pesos</td>
        <td><a href="{{ route('mob-viewbookreturn') }}"><button>View</button></a></td>
      </tr>
</table>  
<div class="total-fines">
    <h3>Total Fines:</h3> 
    <h4>110 Pesos</h4> 
</div>
@endsection
