<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSM</title>

    {{-- jquery --}}
    <script src="{{ Vite::asset('resources/js/jquery.js') }}"></script>

    {{-- sweet alert2 js --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- fonts - marko and new amsterdam  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body class="bg-black text-white font-marko">
    <div class="flex flex-col min-h-[100vh]">
        <div class="py-6 px-4 text-center space-y-3 border-b border-white/30">
            <div class="text-center">
                <img src="http://placehold.it/80/80" alt="logo" class="mx-auto">
            </div>
            <div class="space-y-5">
                <p>ငွေပေးချေရန်အတွက် အောက်ပါနည်းလမ်းများမှ နှစ်သက်ရာကို အသုံးပြုပေးချေနိုင်ပါတယ်။ အခြားသော Payment Method များအတွက်လည်း chat box မှာ မေးမြန်းနိုင်ပါတယ်။</p>

                <div class="bg-white max-w-[550px] mx-auto text-black p-4 rounded-xl text-teal-500/80 font-italic">
                    **** Payment Note မှာ - ( <span class="text-orange-500 font-extrabold">Phone Service </span> ) လို့ပဲ ရေးပါရန်**** <br>
                    အခြား Note များ လုံးဝ​ (လုံးဝ) မရေးပါရန်
                </div>

                <p>
                    KBZ Pay အကောင့် Limit ပြည့်နေပါက <strong> <a href="" class="text-cyan-500">ဒီနေရာ</a> </strong>  ကို နှိပ်ပါ။
                </p>
            </div>
        </div>

        <main class="my-8">
            {{ $slot }}
        </main>

        <footer class="mt-auto mt-5 space-y-5">
            <h1 class="font-bold text-center text-xl md:text-2xl">
                &#128536;&#128536; A Heartfelt Thanks from <span class="font-extrabold font-amsterdam"> WCM SSM </span> &#128525; &#128525;
            </h1>

            <div class="bg-white rounded-t-xl p-8 min-h-[190px] text-black">
                <div class="flex flex-col md:flex-row justify-between items-center w-[85%] mx-auto space-y-10">
                    <div class="text-center">
                        <h2 class="text-2xl font-amsterdam">Contacts</h2>
                        <p class="font-semibold">09-xxxxx</p>
                        <p class="font-semibold">09-xxxxx</p>
                        <p class="font-semibold">09-xxxxx</p>
                    </div>

                    <div class="flex items-center space-x-5">
                        <x-social-link link="https://www.facebook.com/waichnmin" img="fb.svg" />
                        <x-social-link link="test" img="msg.svg" />
                        <x-social-link link="test" img="tlg.svg" />
                    </div>

                    <div>
                        <img src="http://placehold.it/95/95" alt="">
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        console.log('clicked');

        $(document).ready(function() {
            $('.cp-btn').click(function() {
                // Find the closest container (e.g., the .flex div) and then find the corresponding <h1> tag with the phone number
                let phoneNumber = $(this).closest('.flex').find('h1').text().trim();

                // Create a temporary input element
                let tempInput = $('<input>');

                // Append it to the body
                $('body').append(tempInput);

                // Set the input value to the phone number
                tempInput.val(phoneNumber).css({
                    position: 'absolute',
                    left: '-9999px'
                });

                // Select the content of the input
                tempInput.select();

                // Execute the copy command
                document.execCommand('copy');

                // Remove the temporary input from the DOM
                tempInput.remove();

                // Alert the user that the phone number was copied
                Swal.fire({
                    icon: "success",
                    title: "Copied to Clickboard!! &#129321;",
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        });

    </script>
</body>
</html>
