<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Soundeal - Track</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='{{ asset("css/discography.css") }}'>
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300&display=swap" rel="stylesheet">
        <script src='{{ asset("js/upload_track.js") }}' defer></script>
        <link rel="icon" href="{{asset('images/soundeal.png')}}">
    </head>
    <body>
        <a class="exit_button" href='{{ url("discography") }}'><img src="{{asset('images/exit.png')}}"></a>
        <h1 class="new_album_track">Nuovo brano</h1>
        <form name="create_track" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="upload_file">
                <input type="file" name="song_file" id="song_file" class="hidden" accept='audio/mp3'>
                <label for="song_file">
                    <img src="{{asset('images/upload.png')}}">
                    <span>Carica il tuo brano</span>
                </label>
                <p class="hidden err"></p>
                <p class="server_error">@error('song_file') {{ $message }} @enderror</p> 
            </div>

            <div class="music_title">
                <label for="song_title"></label>
                <input type="text" name="song_title" id="song_title" placeholder="Inserisci un titolo">
                <p class="hidden">Torna quando avrai scelto un titolo per il tuo brano.</p>
                <p class="server_error">@error('song_title') {{ $message }} @enderror</p> 
            </div>

            <div class="music_title">
                <label for="author_name"></label>
                <input type="text" name="author_name" id="author_name" placeholder="Inserisci l'autore">
                <p class="hidden">Inserisci il tuo nome o quello dell'autore se stai caricando una cover.</p>
                <p class="server_error">@error('author_name') {{ $message }} @enderror</p> 
            </div>

            <div id="select_elements"> 
                <h1>Genere</h1>
                <div>
                    <select name="song_genre">
                        <option value="" selected></option>
                        <option value="Alternative Rock">Alternative Rock</option>
                        <option value="Blues">Blues</option>
                        <option value="Country">Country</option>
                        <option value="Elettronica">Elettronica</option>
                        <option value="Glam Rock">Glam Rock</option>
                        <option value="Gospel">Gospel</option>
                        <option value="Grunge">Grunge</option>
                        <option value="Hard Rock">Hard Rock</option>
                        <option value="Hip-Hop">Hip-Hop</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Lo-Fi">Lo-Fi</option>
                        <option value="Metal">Metal</option>
                        <option value="Musica classica">Musica classica</option>
                        <option value="New Wave">New Wave</option>
                        <option value="Pop">Pop</option>
                        <option value="Progressive Rock">Progressive Rock</option>
                        <option value="Punk Rock">Punk Rock</option>
                        <option value="Rock">Rock</option>
                        <option value="Trap">Trap</option>
                    </select>
                    <p class="hidden err">Scegli il genere pi?? appropriato.</p>
                    <p class="server_error">@error('song_genre') {{ $message }} @enderror</p> 
                <div>

                <h1>Tipo</h1>
                <div>
                    <select name="song_type">
                        <option value="" selected></option>
                        <option value="Brano originale">Brano originale</option>
                        <option value="Cover">Cover</option>
                        <option value="Mashup">Mashup</option>
                        <option value="Remix">Remix</option>
                    </select>
                    <p class="hidden err">Non ?? una decisione difficile.</p>
                    <p class="server_error">@error('song_type') {{ $message }} @enderror</p> 
                </div>


                <h1>Lingua testo</h1>
                <div>
                    <select name="languages">
                        <option value="" selected></option>
                        <option value="strumentale">Strumentale</option>
                        <option value="af">Afrikaans</option>
                        <option value="sq">Albanian - shqip</option>
                        <option value="am">Amharic - ????????????</option>
                        <option value="ar">Arabic - ??????????????</option>
                        <option value="an">Aragonese - aragon??s</option>
                        <option value="hy">Armenian - ??????????????</option>
                        <option value="ast">Asturian - asturianu</option>
                        <option value="az">Azerbaijani - az??rbaycan dili</option>
                        <option value="eu">Basque - euskara</option>
                        <option value="be">Belarusian - ????????????????????</option>
                        <option value="bn">Bengali - ???????????????</option>
                        <option value="bs">Bosnian - bosanski</option>
                        <option value="br">Breton - brezhoneg</option>
                        <option value="bg">Bulgarian - ??????????????????</option>
                        <option value="ca">Catalan - catal??</option>
                        <option value="ckb">Central Kurdish - ?????????? (???????????????? ????????????)</option>
                        <option value="zh">Chinese - ??????</option>
                        <option value="zh-HK">Chinese (Hong Kong) - ??????????????????</option>
                        <option value="zh-CN">Chinese (Simplified) - ??????????????????</option>
                        <option value="zh-TW">Chinese (Traditional) - ??????????????????</option>
                        <option value="co">Corsican</option>
                        <option value="hr">Croatian - hrvatski</option>
                        <option value="cs">Czech - ??e??tina</option>
                        <option value="da">Danish - dansk</option>
                        <option value="nl">Dutch - Nederlands</option>
                        <option value="en">English</option>
                        <option value="en-AU">English (Australia)</option>
                        <option value="en-CA">English (Canada)</option>
                        <option value="en-IN">English (India)</option>
                        <option value="en-NZ">English (New Zealand)</option>
                        <option value="en-ZA">English (South Africa)</option>
                        <option value="en-GB">English (United Kingdom)</option>
                        <option value="en-US">English (United States)</option>
                        <option value="eo">Esperanto - esperanto</option>
                        <option value="et">Estonian - eesti</option>
                        <option value="fo">Faroese - f??royskt</option>
                        <option value="fil">Filipino</option>
                        <option value="fi">Finnish - suomi</option>
                        <option value="fr">French - fran??ais</option>
                        <option value="fr-CA">French (Canada) - fran??ais (Canada)</option>
                        <option value="fr-FR">French (France) - fran??ais (France)</option>
                        <option value="fr-CH">French (Switzerland) - fran??ais (Suisse)</option>
                        <option value="gl">Galician - galego</option>
                        <option value="ka">Georgian - ?????????????????????</option>
                        <option value="de">German - Deutsch</option>
                        <option value="de-AT">German (Austria) - Deutsch (??sterreich)</option>
                        <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                        <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                        <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                        <option value="el">Greek - ????????????????</option>
                        <option value="gn">Guarani</option>
                        <option value="gu">Gujarati - ?????????????????????</option>
                        <option value="ha">Hausa</option>
                        <option value="haw">Hawaiian - ????lelo Hawai??i</option>
                        <option value="he">Hebrew - ??????????</option>
                        <option value="hi">Hindi - ??????????????????</option>
                        <option value="hu">Hungarian - magyar</option>
                        <option value="is">Icelandic - ??slenska</option>
                        <option value="id">Indonesian - Indonesia</option>
                        <option value="ia">Interlingua</option>
                        <option value="ga">Irish - Gaeilge</option>
                        <option value="it">Italian - italiano</option>
                        <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                        <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                        <option value="ja">Japanese - ?????????</option>
                        <option value="kn">Kannada - ???????????????</option>
                        <option value="kk">Kazakh - ?????????? ????????</option>
                        <option value="km">Khmer - ???????????????</option>
                        <option value="ko">Korean - ?????????</option>
                        <option value="ku">Kurdish - Kurd??</option>
                        <option value="ky">Kyrgyz - ????????????????</option>
                        <option value="lo">Lao - ?????????</option>
                        <option value="la">Latin</option>
                        <option value="lv">Latvian - latvie??u</option>
                        <option value="ln">Lingala - ling??la</option>
                        <option value="lt">Lithuanian - lietuvi??</option>
                        <option value="mk">Macedonian - ????????????????????</option>
                        <option value="ms">Malay - Bahasa Melayu</option>
                        <option value="ml">Malayalam - ??????????????????</option>
                        <option value="mt">Maltese - Malti</option>
                        <option value="mr">Marathi - ???????????????</option>
                        <option value="mn">Mongolian - ????????????</option>
                        <option value="ne">Nepali - ??????????????????</option>
                        <option value="no">Norwegian - norsk</option>
                        <option value="nb">Norwegian Bokm??l - norsk bokm??l</option>
                        <option value="nn">Norwegian Nynorsk - nynorsk</option>
                        <option value="oc">Occitan</option>
                        <option value="or">Oriya - ???????????????</option>
                        <option value="om">Oromo - Oromoo</option>
                        <option value="ps">Pashto - ????????</option>
                        <option value="fa">Persian - ??????????</option>
                        <option value="pl">Polish - polski</option>
                        <option value="pt">Portuguese - portugu??s</option>
                        <option value="pt-BR">Portuguese (Brazil) - portugu??s (Brasil)</option>
                        <option value="pt-PT">Portuguese (Portugal) - portugu??s (Portugal)</option>
                        <option value="pa">Punjabi - ??????????????????</option>
                        <option value="qu">Quechua</option>
                        <option value="ro">Romanian - rom??n??</option>
                        <option value="mo">Romanian (Moldova) - rom??n?? (Moldova)</option>
                        <option value="rm">Romansh - rumantsch</option>
                        <option value="ru">Russian - ??????????????</option>
                        <option value="gd">Scottish Gaelic</option>
                        <option value="sr">Serbian - ????????????</option>
                        <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                        <option value="sn">Shona - chiShona</option>
                        <option value="sd">Sindhi</option>
                        <option value="si">Sinhala - ???????????????</option>
                        <option value="sk">Slovak - sloven??ina</option>
                        <option value="sl">Slovenian - sloven????ina</option>
                        <option value="so">Somali - Soomaali</option>
                        <option value="st">Southern Sotho</option>
                        <option value="es">Spanish - espa??ol</option>
                        <option value="es-AR">Spanish (Argentina) - espa??ol (Argentina)</option>
                        <option value="es-419">Spanish (Latin America) - espa??ol (Latinoam??rica)</option>
                        <option value="es-MX">Spanish (Mexico) - espa??ol (M??xico)</option>
                        <option value="es-ES">Spanish (Spain) - espa??ol (Espa??a)</option>
                        <option value="es-US">Spanish (United States) - espa??ol (Estados Unidos)</option>
                        <option value="su">Sundanese</option>
                        <option value="sw">Swahili - Kiswahili</option>
                        <option value="sv">Swedish - svenska</option>
                        <option value="tg">Tajik - ????????????</option>
                        <option value="ta">Tamil - ???????????????</option>
                        <option value="tt">Tatar</option>
                        <option value="te">Telugu - ??????????????????</option>
                        <option value="th">Thai - ?????????</option>
                        <option value="ti">Tigrinya - ????????????</option>
                        <option value="to">Tongan - lea fakatonga</option>
                        <option value="tr">Turkish - T??rk??e</option>
                        <option value="tk">Turkmen</option>
                        <option value="tw">Twi</option>
                        <option value="uk">Ukrainian - ????????????????????</option>
                        <option value="ur">Urdu - ????????</option>
                        <option value="ug">Uyghur</option>
                        <option value="uz">Uzbek - o???zbek</option>
                        <option value="vi">Vietnamese - Ti???ng Vi???t</option>
                        <option value="wa">Walloon - wa</option>
                        <option value="cy">Welsh - Cymraeg</option>
                        <option value="fy">Western Frisian</option>
                        <option value="xh">Xhosa</option>
                        <option value="yi">Yiddish</option>
                        <option value="yo">Yoruba - ??d?? Yor??b??</option>
                        <option value="zu">Zulu - isiZulu</option>                                    
                    </select>
                    <p class="hidden err">L'opzione "strumentale" esiste per un motivo.</p>
                    <p class="server_error">@error('languages') {{ $message }} @enderror</p> 
                </div>
                <h1>Album</h1>
                <div>
                    <select name="song_album">
                        <option value="" selected></option>
                    </select>
                    <p class="hidden err">Scegli l'album in cui vuoi aggiungere il tuo brano.</p>
                    <p class="server_error">@error('song_album') {{ $message }} @enderror</p> 
                <div>
            </div>

            <div>
                <input id="submit" type="submit" value="Crea brano" class="create" disabled>
            </div>
        </form>

    </body>
</html>