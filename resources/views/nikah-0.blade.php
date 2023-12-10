<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikah</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F9EDED]">
    <!-- Cover -->
    <div id="cover" class="top-0 h-screen w-full z-50 fixed">
        <div id="coverBottom" class="absolute bottom-0 w-full bg-[#F9EDED] h-1/4 transition duration-[2000ms]" style="transform-origin: bottom center;"></div>
        <div id="coverTop" class="h-full transition duration-[2000ms]" style="transform-origin: top center;">
            <div class="flex justify-center h-3/4 gap-6 xs:gap-12 bg-[#F9EDED]">
                <div class="flex flex-col items-center relative">
                    <div class="absolute h-1/2 bg-[#1C1C1B] w-6 sm:w-8"></div>
                    <div class="flex-grow"></div>
                    <div class="font-['JetBrainsMono'] font-bold text-4xl xs:text-6xl sm:text-8xl text-justify rounded-full bg-[#1C1C1B] text-white px-6 py-12 xs:px-8 xs:py-16 h-fit !leading-[1.5] z-10">23<br>10<br>
                        <div class="text-xl xs:text-3xl sm:text-5xl">2023</div>
                    </div>
                    <div class="flex-grow"></div>
                </div>
                <div class="font-['Sacramento'] text-6xl sm:text-8xl rounded-full border-4 aspect-square border-black flex justify-center items-center w-38 h-38 sm:w-64 sm:h-64 my-auto" style="text-shadow: 3px 3px 0 #F9EDED, -3px 3px 0 #F9EDED, -3px -3px 0 #F9EDED, 3px -3px 0 #F9EDED;">
                    <div class="mb-16">R</div>
                    <div>&</div>
                    <div class="mt-16">A</div>
                </div>
            </div>
            <div class="bg-[#6B1716] w-full h-12 relative">
                <hr class="border-[#F9EDED] border-2 absolute bottom-4 w-full">
                <button type="button" class="font-['Sacramento'] bg-[#6B1716] absolute left-1/2 -translate-x-1/2 -translate-y-1/3 rounded-full aspect-square text-white text-4xl p-8 mx-auto border-4 border-[#F9EDED]" onclick="openCover()">Open</button>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-48 sm:w-52 mx-auto pt-8" viewBox="0 0 116 88" fill="none">
                    <mask id="mask0_9_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="53" height="88">
                        <path d="M31.8416 0.968018L52.2381 9.20875L20.4109 87.9838L17.327 66.2549L0.0143836 79.743L31.8416 0.968018Z" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_9_48)">
                        <rect width="84.9616" height="14.6656" transform="matrix(0.374776 -0.927115 0.927252 0.374437 0 79.7371)" fill="#6B1716" />
                        <rect width="84.9616" height="5.49959" transform="matrix(0.374776 -0.927115 0.927252 0.374437 15.2986 85.9147)" fill="#6B1716" />
                    </g>
                    <mask id="mask1_9_48" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="63" y="0" width="53" height="89">
                        <path d="M83.5178 0.993896L63.1213 9.23463L94.9485 88.0096L98.0324 66.2807L115.345 79.7689L83.5178 0.993896Z" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask1_9_48)">
                        <rect width="84.9616" height="14.6656" transform="matrix(-0.374776 -0.927115 -0.927252 0.374437 115.359 79.7629)" fill="#6B1716" />
                        <rect width="84.9616" height="5.49959" transform="matrix(-0.374776 -0.927115 -0.927252 0.374437 100.061 85.9405)" fill="#6B1716" />
                    </g>
                </svg>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="min-h-screen font-['Ruluko'] max-w-3xl md:mx-auto overflow-x-clip">
        <div class="ml-auto md:mx-auto rounded-b-full w-[90%] md:w-96 aspect-[21/33] border-8 border-t-0 border-[#1C1C1B] p-4 pt-0 relative" style="transform: translateX(calc(1rem + 8px));">
            <div class="rounded-b-full w-full h-full saturate-0" style="background-image: url('img/pengantin/0/utama.jpg'); background-size: cover;">
            </div>
            <div class="font-['JetBrainsMono'] text-3xl sm:text-5xl md:text-4xl absolute -left-2 top-1/3 -rotate-90 -translate-x-1/2 bg-[#F9EDED] p-3">Save the Date</div>
        </div>

        <div class="mx-8 md:mx-4">
            <img src="img/tampilan/pembatas.png" class="mx-auto mt-16 w-3/4 md:w-1/2">
            <p class="text-xl text-center mt-8">We invited you to celebrate<br>our wedding</p>
            <p class="font-['Sacramento'] text-6xl text-center mt-8">Rudi & Aura</p>
            <img src="img/tampilan/pembatas.png" class="mx-auto mt-8 w-3/4 md:w-1/2">

            <img src="img/tampilan/bismillah.png" class="w-2/6 mx-auto mt-16">

            <p class="text-center max-w-lg mx-auto">Sesungguhnya hati ini telah terhimpun dalam cinta dan bertemu dalam taat kepada Mu. Eratkanlah ikatannya, kekalkanlah kasih sayangnya, berkahilah jalannya dan penuhilah hati ini dengan cahaya Mu yang tak pernah pudar Rasa haru dan bahagia terukir dihati kami atas limpahan Rahmat Allah SWT dan kami bersimpuh memohon Ridho Nya untuk melangsungkan
                resepsi pernikahan putra - putri kami</p>
            <div class="bg-[#1C1C1B] rounded-full flex flex-col text-[#FDF7F7] p-6 max-w-sm mx-auto mt-16 relative">
                <img src="img/pengantin/0/pria.png" class="overflow-hidden rounded-t-full">
                <p class="font-['Sacramento'] text-4xl text-center mt-8">Rudi Halimawan</p>
                <p class="text-center mt-4">Putra dari:<br>Bpk Handoko Pratama<br>Ibu Siti Aisyah</p>

                <div class="flex justify-center items-center mt-8">
                    <hr class="absolute border-8 flex-grow border-[#6B1716] w-full">
                    <div class="rounded-full font-['Sacramento'] bg-[#6B1716] py-3 px-9 text-4xl z-10">Dan</div>
                    <!-- <hr class="border-8 flex-grow border-[#6B1716]"> -->
                </div>

                <p class="font-['Sacramento'] text-4xl text-center mt-8">Aura Badriyah</p>
                <p class="text-center mt-4">Putri dari:<br>Bpk Muhammad Alam<br>Ibu Yunita Aliyani</p>
                <img src="img/pengantin/0/wanita.png" class="overflow-hidden rounded-b-full mt-8">
            </div>

            <p class="font-['Sacramento'] text-4xl text-center mt-16">Akad Nikah</p>
            <div class="flex text-lg xs:text-2xl sm:text-4xl gap-4 justify-between mt-8 relative">
                <p>Ahad,<br>Oktober</p>
                <p class="font-['JetBrainsMono'] font-bold text-6xl sm:text-8xl border-x-2 border-black px-2 absolute left-1/2 -translate-x-1/2">22</p>
                <p class="text-right">Pukul<br>10.00 WIB</p>
            </div>

            <p class="font-['Sacramento'] text-4xl text-center mt-16">Resepsi</p>
            <div class="flex text-lg xs:text-2xl sm:text-4xl gap-4 justify-between mt-8 relative">
                <p>Senin,<br>Oktober</p>
                <p class="font-['JetBrainsMono'] font-bold text-6xl sm:text-8xl border-x-2 border-black px-2 absolute left-1/2 -translate-x-1/2">23</p>
                <p class="text-right">Pukul<br>Rilex</p>
            </div>

            <div class="mt-16 flex justify-center">
                <a href="" class="text-white bg-[#6B1716] px-5 py-3 rounded-full">Save the Date</a>
            </div>

            <p class="font-['Sacramento'] text-4xl text-center mt-16">Gallery Foto</p>
            <div class="flex aspect-[11/12] w-full gap-4 mt-8">
                <div class="flex flex-col w-full gap-4">
                    <div class="h-3/4 rounded-lg" style="background-image: url('img/pengantin/0/galeri-0.jpg'); background-size: cover; background-position: center"></div>
                    <div class="h-1/4 rounded-lg" style="background-image: url('img/pengantin/0/galeri-1.jpg'); background-size: cover; background-position: center"></div>
                </div>
                <div class="flex flex-col w-full gap-4">
                    <div class="h-1/4 rounded-lg" style="background-image: url('img/pengantin/0/galeri-2.jpg'); background-size: cover; background-position: center"></div>
                    <div class="h-3/4 rounded-lg" style="background-image: url('img/pengantin/0/galeri-3.jpg'); background-size: cover; background-position: center"></div>
                </div>
            </div>

            <p class="font-['Sacramento'] text-4xl text-center mt-16">Lokasi</p>
            <p class="text-center mt-4">Jl. Mawar no. 17, RT 05/RW 02 Dusun Dahlia,<br>Desa Florin, Kec. Jombang</p>
            <div class="bg-[#6B1716] rounded-lg p-4 mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.18123056895!2d112.2318216759443!3d-7.555208574603979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78401f6bf03fbf%3A0xe7c65fccb893884e!2sJl.%20Bupati%20Raa%20Soeroadiningrat%20No.6%2C%20Kepanjen%2C%20Kec.%20Jombang%2C%20Kabupaten%20Jombang%2C%20Jawa%20Timur%2061411!5e0!3m2!1sid!2sid!4v1701131319435!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mt-4 flex justify-center">
                <a href="" class="text-white bg-[#6B1716] px-5 py-3 rounded-full mx-auto">Lokasi Resepsi</a>
            </div>

            <p class="font-['Sacramento'] text-4xl text-center mt-16">Beri Hadiah Ke Mempelai</p>
            <p class="text-center mt-4 max-w-lg mx-auto">Doa restu Keluarga, sahabat, dan rekan - rekan semua sudah sangat cukup sebagai hadiah, tetapi jika memberi merupakan tanda kasih, kami dengan senang hati menerimanya.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4">
                <div class="bg-white py-4 px-3 rounded-3xl mt-4">
                    <div class="border-8 border-[#F9EDED] rounded-3xl h-full flex flex-col justify-between">
                        <img src="img/logo/bca.png" class="w-1/3 mx-auto">
                        <p class="text-xl text-center">Rudi Halimawan<br>1231231234</p>
                        <div class="flex justify-center mt-4 mb-8">
                            <a href="" class="text-white bg-[#1C1C1B] px-5 py-3 rounded-full">Copy No. Rekening</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white py-4 px-3 rounded-3xl mt-4">
                    <div class="border-8 border-[#F9EDED] rounded-3xl h-full flex flex-col justify-between">
                        <img src="img/logo/dana.png" class="w-1/3 mx-auto my-8">
                        <p class="text-xl text-center">Rudi Halimawan<br>1231231234</p>
                        <div class="flex justify-center mt-4 mb-8">
                            <a href="" class="text-white bg-[#1C1C1B] px-5 py-3 rounded-full">Copy No. Dana</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[#1C1C1B] text-[#FDF7F7] pt-12 pb-24 mt-16">
            <div class="w-5/6 mx-auto">
                <p class="font-['Sacramento'] text-4xl text-center">Kirimkan Ucapan</p>
                <div class="flex flex-col gap-4 mt-6 text-lg">
                    <label for="namaUcapan">Nama</label>
                    <input type="text" name="namaUcapan" id="namaUcapan" class="text-black px-3 py-4 rounded-xl">
                    <label for="teksUcapan">Ucapan atau Do'a</label>
                    <textarea name="teksUcapan" id="teksUcapan" rows="4" class="text-black px-3 py-4 rounded-xl"></textarea>
                    <label for="kehadiranUcapan">Kehadiran</label>
                    <select name="kehadiranUcapan" id="kehadiranUcapan" class="text-black px-3 py-4 rounded-xl">
                        <option value="1" selected="selected">Hadir</option>
                        <option value="0">Tidak Hadir</option>
                    </select>
                </div>
                <div class="mt-8">
                    <a href="" class="text-white bg-[#6B1716] px-5 py-3 rounded-full">Kirim</a>
                </div>
                <hr class="border-2 border-white w-96 mx-auto mt-16">
                @php
                $comments = [
                [
                "sender" => "Ahmad",
                "attendance" => true,
                "text" => "Selamat menempuh hidup baru ya mas..semoga jd keluarga sakinah mawaddah warrohmah aamiiin"
                ],
                [
                "sender" => "Safina",
                "attendance" => false,
                "text" => "Selamat menempuh hidup baru semoga menjadi keluarga yang samawa …langgeng selamanya …Aamiin"
                ],
                ];
                @endphp
                @foreach ($comments as $comment)
                <div class="text-lg mt-12">
                    <p>{{$comment["sender"]}} <span class="text-white bg-[#6B1716] text-xs px-2 py-1 rounded-full">{{$comment["attendance"] ? "Hadir" : "Tidak Hadir"}}</span></p>
                    <p>{{$comment["text"]}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

<script>
    const cover = document.getElementById('cover');
    const coverTop = document.getElementById('coverTop');
    const coverBottom = document.getElementById('coverBottom');

    function openCover() {
        coverTop.style.transform = "translateY(-100vh)";
        coverBottom.style.transform = "translateY(100vh)";
        setTimeout(() => {
            cover.style.display = "none";
        }, 2000);
    }
</script>

<style>
    @font-face {
        font-family: Ruluko;
        src: url('/fonts/Ruluko/Ruluko-Regular.ttf');
    }

    @font-face {
        font-family: JetBrainsMono;
        src: url('/fonts/JetBrains Mono/JetBrainsMono-VariableFont_wght.ttf');
    }

    @font-face {
        font-family: Sacramento;
        src: url('/fonts/Sacramento/Sacramento-Regular.ttf');
    }
</style>

</html>