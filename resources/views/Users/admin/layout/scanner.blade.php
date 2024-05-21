<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="bg-gray-200 w-[620px] ml-5">
                    <div class="px-4 py-4">
                        <video id="preview" class="w-[600px] h-auto"></video>
                        {{-- top-left --}}
                        <div class="border-2 border-white w-16 absolute top-[130px] left-[180px]"></div>
                        <div class="border-2 border-white w-16 absolute top-[160px] transform rotate-90 left-[150px]">
                        </div>
                        {{-- bottom-left --}}
                        <div class="border-2 border-white w-16 absolute top-[320px] transform rotate-90 left-[150px]">
                        </div>
                        <div class="border-2 border-white w-16 absolute top-[350px] left-[180px]"></div>
                        {{-- top-right --}}
                        <div class="border-2 border-white w-16 absolute top-[130px] left-[430px]"></div>
                        <div class="border-2 border-white w-16 absolute top-[160px] transform rotate-90 left-[460px]">
                        </div>
                        {{-- bottom-right --}}
                        <div class="border-2 border-white w-16 absolute top-[320px] transform rotate-90 left-[460px]">
                        </div>
                        <div class="border-2 border-white w-16 absolute top-[350px] left-[430px]"></div>

                        <form action="" method="POST" id="form">
                            @csrf
                            <input type="hidden" name="id_student" id="id_student">
                        </form>
                    </div>
                </div>

                
<script>
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            scanner.addListener('scan', function(c) {
                // document.getElementById('text').value = c;
                // setTimeout(function() {
                document.getElementById('text').classList.remove('hidden');
                document.getElementById('id_student').value = c;
                document.getElementById('form').submit();

            });

            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    console.error('No cameras found.');
                }
            }).catch(function(e) {
                console.error(e);
            });
        </script>
</body>

</html>