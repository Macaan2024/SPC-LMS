<x-student.layout>
    <x-slot name="changepassword">
        <div class="container d-flex justify-content-center align-items-center mt-5" style="min-width:320px;">
            <div class="h-75 w-75">
                <form action="{{ route('spc-lms.process-password', ['id' => Auth::user()->id]) }}" method="POST">
                    @csrf <!-- Add CSRF token for security -->
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-column">
                            <label for="oldpassword">Old Password</label>
                            <input type="password" name="oldpassword" id="oldpassword" class="form-control" required>
                        </div>
                        <div>
                            <label for="newpassword">New Password</label>
                            <input type="password" name="newpassword" id="newpassword" class="form-control" required>
                        </div>
                        <div>
                            <label for="retypepassword">Retype Password</label>
                            <input type="password" name="retypepassword" id="retypepassword" class="form-control" required>
                        </div>
                        <input type="submit" class="bg-success text-white border-0 rounded shadow-sm py-2" value="Change Password">
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-student.layout>