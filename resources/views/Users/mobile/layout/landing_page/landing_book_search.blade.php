<div class="">
    <form action="" class="d-flex align-items-center" id="searchForm">
        <select name="names" id="names" class="form-select border-right-1" style="width:100px; border-top-right-radius: 0;idth:100px; border-bottom-right-radius: 0;">
            <option selected>Search type</option>
            <option value="id">Book ID</option>
            <option value="title">Book Title</option>
            <option value="author">Book Author</option>
            <option value="isbn">Book ISBN</option>
        </select>
        <input class="form-control border-1" type="search" placeholder="Search Book Access Number" name="search" id="search"  style="border-radius:0;">
        <button type="submit" class="border-1 p-1" style="border-top-right-radius: 5px; border-bottom-right-radius: 5px;background-color:#661011;" id="searchBtn">
            <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24"><g fill="none"><path d="M0 0h24v24H0z"/><path fill="currentColor" d="M10.5 2a8.5 8.5 0 0 1 6.676 13.762l3.652 3.652a1 1 0 0 1-1.414 1.414l-3.652-3.652A8.5 8.5 0 1 1 10.5 2m0 2a6.5 6.5 0 1 0 0 13a6.5 6.5 0 0 0 0-13m0 1a5.5 5.5 0 1 1 0 11a5.5 5.5 0 0 1 0-11"/></g></svg>
        </button>
    </form>
</div>
<table class="mt-3" id="searchOutput" style="display:none;">
    <tr>
        <th>Accession Number</th>
        <th>Title</th>
        <th>Availability</th>
    </tr>
    <tr>
        <td>13758</td>
        <td>HTML 1</td>
        <td>Available</td>
    </tr>
</table>
<script>
    const searchForm = document.getElementById('searchForm');
    const searchOutput = document.getElementById('searchOutput');

    searchForm.addEventListener('submit', function(event) {
        event.preventDefault();
        toggleOutput();
    });

    function toggleOutput() {
        if (searchOutput.style.display === 'none') {
            searchOutput.style.display = '';
        } else {
            searchOutput.style.display = 'none';
        }
    }
</script>