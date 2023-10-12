<!-- 
Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

Bonus (da fare entro domani prima della correzione)
Al click su un disco, recuperare e mostrare i dati del disco selezionato. 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spotify</title>

    <!--bootstrap-css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--fontAwesome-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--my css-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="app">
        <header>
            <i class="fa-brands fa-spotify"></i>
        </header>

        <main class="container d-flex flex-wrap justify-content-center gap-3 py-3">

            <div class="card text-white text-center" v-for="(song, index) in songs" @click="selectSong(index)">
                <img :src="song.poster" class="card-img-top mb-3">
                <h3 class="card-title mb-2">{{song.title}}</h3>
                <span style="font-size: small;" class="mb-1">{{song.author}}</span>
                <span style="font-size: medium;"><strong>{{song.year}}</strong></span>
            </div>


            <div class="songActive" v-if="activeSong">
                <div class="card text-white text-center">
                    <img :src="songs[songNumber].poster" class="card-img-top mb-3">
                    <h3 class="card-title mb-2">{{songs[songNumber].title}}</h3>
                    <span style="font-size: small;" class="mb-1">{{songs[songNumber].author}}</span>
                    <span style="font-size: medium;"><strong>{{songs[songNumber].year}}</strong></span>
                </div>

                <div class="closeSong" @click="activeSong = false">
                    <i class="fa-regular fa-circle-xmark" style="color: #ffffff;"></i>
                </div>
            </div>

        </main>


    </div>


    <!--boostrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--vue-js-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!--axios-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.0/axios.min.js" integrity="sha512-aoTNnqZcT8B4AmeCFmiSnDlc4Nj/KPaZyB5G7JnOnUEkdNpCZs1LCankiYi01sLTyWy+m2P+W4XM+BuQ3Q4/Dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--myProject-js-->
    <script src="main.js"></script>
</body>

</html>