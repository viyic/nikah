<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikah</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFE9CA]">
    <div id="cover" class="top-0 h-screen w-full z-50 fixed transition duration-[2000ms]">
        <img class="absolute w-64 md:w-96 top-0 right-0 rotate-[155deg]" src="img/tampilan/1/bunga-0.png" />
        <img class="absolute w-64 md:w-96 bottom-0 left-0 -rotate-[25deg]" src="img/tampilan/1/bunga-0.png" />

        <div class="flex flex-col items-center justify-center gap-8 w-full h-full bg-[#FFE9CA]" style="background-image: url('img/pengantin/1/cover.png'); background-repeat: no-repeat; background-position: center">
            <div class="font-[LibreBodoni] text-4xl">THE WEDDING</div>
            <div class="font-[MonteCarlo] text-6xl flex justify-center items-center gap-4">
                <div class="mb-16">Dimas</div>
                <div class="rounded-full flex justify-center items-center w-16 h-16 bg-white font-[MySoul]"><span class="-rotate-[20deg] -translate-x-1/4">&</span></div>
                <div class="mt-16">Cahya</div>
            </div>
            <img class="cincin" src="img/tampilan/1/cincin.png" />
            <div class="flex font-[LibreBodoni] text-2xl">
                <div class="">Februari</div>
                <div class="border-solid border-x-2 px-4 mx-4">09</div>
                <div class="text-wrapper-4">2023</div>
            </div>
            <button type="button" class="p-3 bg-[#D97E31] text-white flex gap-4 items-center rounded-lg font-[Montserrat]" onclick="openCover()">
                Swipe Down
                <img class="vector" src="img/tampilan/1/down.svg" />
            </button>
        </div>
    </div>

    <div class="md:mx-auto max-w-3xl overflow-x-clip font-[Mirza]">
        <div class="flex flex-col justify-center items-center mx-8">
            <div class="relative overflow-x-clip">
                <img class="object-cover w-[150%] -translate-x-[25%] max-w-none" src="img/pengantin/1/utama.png" />
                <img class="absolute -bottom-24 w-60 -left-4" src="img/tampilan/1/bunga-0.png" />
                <img class="absolute -bottom-12 w-full" src="img/tampilan/1/pita.png" />
                <div class="flex gap-8 justify-around absolute bottom-0 w-full text-white text-xl sm:text-4xl">
                    <span>Dimas</span>
                    <span>Cahya</span>
                </div>
            </div>

            <p class="mt-16 text-center text-xl md:text-2xl">Kami mengundang anda <br />untuk merayakan pernikahan kami</p>

            <div class="border border-[#743319] border-dashed p-1 rounded-lg mt-16">
                <div class="bg-[#D97E31] p-4 rounded-lg text-white md:text-xl">SAVE THE DATE</div>
            </div>
            <div class="text-center w-full md:text-2xl mt-16">
                Jika ada manusia belum hidup bersama pasangannya,
                berarti hidupnya akan timpang dan tidak berjalan
                sesuai denganketetapan Allah SWT dan orang yang
                menikah berarti melengkapi agamanya, sabda Rasulullah SAW:<br />"Barangsiapa
                diberi Allah seorang istri
                yang sholihah, sesungguhnya telah ditolong separoh agamanya.
                Dan hendaklah bertaqwa kepada Allah separoh lainnya."<br />(HR. Baihaqi).
            </div>

            <div class="flex gap-4 items-center mt-16">
                <div class="bg-[#fece87] h-1 w-[155px]"></div>
                <img class="" src="img/tampilan/1/love.svg" />
                <div class="bg-[#fece87] h-1 w-[155px]"></div>
            </div>
            <img class="w-1/2 mt-16" src="img/tampilan/1/bismillah.png" />

            <div class="text-center md:text-2xl mt-16">
                Ya Allah, dengan Rahmat dan Ridho-Mu perkenankanlah
                tautan cinta buah hati kami:
            </div>

            <div class="font-[MySoul] text-[#CB5E2E] text-4xl md:text-6xl mt-16">Cahya Dwi Wibowo</div>
            <div class="md:text-2xl">Putri Bpk. Yusuf Wibowo &amp; Putri Ibu. Maryam</div>
            <div class="relative">
                <img class="absolute w-2/3 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" src="img/pengantin/1/wanita.png" />
                <img class="z-10 relative" src="img/tampilan/1/bingkai.png" />
                <img class="z-20 absolute right-0 -bottom-12 w-3/5 -rotate-90" src="img/tampilan/1/bunga-1.png" />
            </div>

            <div class="font-[MySoul] text-[#CB5E2E] text-4xl md:text-6xl mt-16">Dimas Drajad Santoso</div>
            <div class="md:text-2xl">Putra Bpk. Eko Santoso &amp; Putra Ibu. Siti Rofi'ah</div>
            <div class="relative">
                <img class="absolute w-2/3 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" src="img/pengantin/1/pria.png" />
                <img class="z-10 relative" src="img/tampilan/1/bingkai.png" />
                <img class="z-20 absolute left-0 -bottom-12 w-3/5" src="img/tampilan/1/bunga-1.png" />
            </div>

            <div class="border border-[#743319] border-dashed p-1 rounded-lg mt-16">
                <div class="bg-[#D97E31] p-4 rounded-lg text-white md:text-xl">GALERI FOTO</div>
            </div>
            <div id="gallery" class="flex items-center gap-4 overflow-x-auto pb-4 rounded-lg mt-16">
                <img class="h-full" src="img/pengantin/1/galeri-0.png" />
                <img class="h-full" src="img/pengantin/1/galeri-1.png" />
                <img class="h-full" src="img/pengantin/1/galeri-2.png" />
            </div>

            <div class="flex gap-4 items-center mt-16">
                <div class="bg-[#fece87] h-1 w-[155px]"></div>
                <img class="" src="img/tampilan/1/love.svg" />
                <div class="bg-[#fece87] h-1 w-[155px]"></div>
            </div>

            <p class="font-[Tangerine] text-4xl md:text-6xl text-center mt-16">Akad Nikah</p>
            <div class="flex text-lg xs:text-2xl sm:text-4xl gap-4 justify-between mt-8 relative w-full">
                <p>Ahad,<br>Oktober</p>
                <p class="font-bold text-6xl sm:text-8xl border-x-2 border-black px-2 absolute left-1/2 -translate-x-1/2 border-solid">22</p>
                <p class="text-right">Pukul<br>10.00 WIB</p>
            </div>

            <p class="font-[Tangerine] text-4xl md:text-6xl text-center mt-16">Resepsi</p>
            <div class="flex text-lg xs:text-2xl sm:text-4xl gap-4 justify-between mt-8 relative w-full">
                <p>Senin,<br>Oktober</p>
                <p class="font-bold text-6xl sm:text-8xl border-x-2 border-black px-2 absolute left-1/2 -translate-x-1/2 border-solid">23</p>
                <p class="text-right">Pukul<br>Rilex</p>
            </div>

            <div class="flex gap-4 text-white text-2xl mt-16">
                <div class="bg-[#D97E31] px-5 py-1 rounded-lg text-center w-24">
                    <div class="text-4xl md:text-6xl">12</div>
                    <div class="">Hari</div>
                </div>
                <div class="bg-[#D97E31] px-5 py-1 rounded-lg text-center w-24">
                    <div class="text-4xl md:text-6xl">4</div>
                    <div class="">Jam</div>
                </div>
                <div class="bg-[#D97E31] px-5 py-1 rounded-lg text-center w-24">
                    <div class="text-4xl md:text-6xl">49</div>
                    <div class="">Menit</div>
                </div>
                <div class="bg-[#D97E31] px-5 py-1 rounded-lg text-center w-24">
                    <div class="text-4xl md:text-6xl">12</div>
                    <div class="">Detik</div>
                </div>
            </div>

            <div class="text-4xl md:text-6xl font-[Tangerine] text-center mt-16">Lokasi</div>
            <p class="text-center md:text-xl">Jl. Mawar no. 17, RT 05/RW 02 Dusun Dahlia, Desa Florin, Kec. Jombang</p>
            <div class="bg-[#D97E31] rounded-lg p-4 mt-4 w-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.18123056895!2d112.2318216759443!3d-7.555208574603979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78401f6bf03fbf%3A0xe7c65fccb893884e!2sJl.%20Bupati%20Raa%20Soeroadiningrat%20No.6%2C%20Kepanjen%2C%20Kec.%20Jombang%2C%20Kabupaten%20Jombang%2C%20Jawa%20Timur%2061411!5e0!3m2!1sid!2sid!4v1701131319435!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="mt-8">
                <a href="" class="text-white bg-[#D97E31] px-5 py-3 rounded-full">Lokasi Akad</a>
            </div>
            <div class="mt-8">
                <a href="" class="text-white bg-[#D97E31] px-5 py-3 rounded-full">Lokasi Resepsi</a>
            </div>

            <div class="text-4xl md:text-6xl font-[Tangerine] text-center mt-16">Beri Hadiah Ke Mempelai</div>
            <p class="text-center md:text-2xl">
                Doa restu Keluarga, sahabat, dan rekan - rekan semua sudah sangat cukup sebagai hadiah, tetapi jika
                memberi
                merupakan tanda kasih, kami dengan senang hati menerimanya.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4">
                <div class="bg-white py-4 px-3 rounded-3xl mt-4">
                    <div class="border-8 border-solid border-[#FECE87] rounded-3xl h-full flex flex-col justify-between">
                        <img src="img/logo/bca.png" class="w-1/3 mx-auto">
                        <p class="text-xl text-center">Rudi Halimawan<br>1231231234</p>
                        <div class="flex justify-center mt-4 mb-8">
                            <a href="" class="text-white bg-[#1C1C1B] px-5 py-3 rounded-full">Copy No. Rekening</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white py-4 px-3 rounded-3xl mt-4">
                    <div class="border-8 border-solid border-[#FECE87] rounded-3xl h-full flex flex-col justify-between">
                        <img src="img/logo/dana.png" class="w-1/3 mx-auto my-8">
                        <p class="text-xl text-center">Rudi Halimawan<br>1231231234</p>
                        <div class="flex justify-center mt-4 mb-8">
                            <a href="" class="text-white bg-[#1C1C1B] px-5 py-3 rounded-full">Copy No. Dana</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-12 pb-24 mt-16">
                <div class="w-5/6 mx-auto">
                    <p class="font-[Tangerine] text-4xl md:text-6xl text-center">Kirimkan Ucapan</p>
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
                        <a href="" class="text-white bg-[#D97E31] px-5 py-3 rounded-full">Kirim</a>
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
                        <p>{{$comment["sender"]}} <span class="text-white bg-[#D97E31] text-xs px-2 py-1 rounded-full">{{$comment["attendance"] ? "Hadir" : "Tidak Hadir"}}</span></p>
                        <p>{{$comment["text"]}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>

</body>

<script>
    const cover = document.getElementById('cover');
    const gallery = document.getElementById('gallery');
    document.addEventListener("DOMContentLoaded", function(event) {
        gallery.scrollLeft += gallery.scrollWidth / 4;
    });

    function openCover() {
        cover.style.transform = "translateY(-100vh)";
        setTimeout(() => {
            cover.style.display = "none";
        }, 2000);
    }
</script>

<style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");
    @import url("https://fonts.googleapis.com/css?family=Libre+Bodoni:400|My+Soul:400|MonteCarlo:400|Montserrat:400");
    @import url('https://fonts.googleapis.com/css2?family=My+Soul&family=Roboto:wght@100&display=swap');

    @font-face {
        font-family: LibreBodoni;
        src: url('/fonts/Libre Bodoni/LibreBodoni-VariableFont_wght.ttf');
    }

    @font-face {
        font-family: MySoul;
        src: url('/fonts/My Soul/MySoul-Regular.ttf');
    }

    @font-face {
        font-family: MonteCarlo;
        src: url('/fonts/MonteCarlo/MonteCarlo-Regular.ttf');
    }

    @font-face {
        font-family: Mirza;
        src: url('/fonts/Mirza/Mirza-Regular.ttf');
    }

    @font-face {
        font-family: Tangerine;
        src: url('/fonts/Tangerine/Tangerine-Regular.ttf');
    }

    * {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0px;
        height: 100%;
    }

    a {
        text-decoration: none;
    }
</style>

</html>