@extends('layouts.header_footer_navbar')
@section('content')
@include('include.message')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
    @if (Session::get('success'))
        <div class="alert alert-primary">
            {{Session::get('success')}}
        </div>
    @endif
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Upload Quran</h4>
                </div>

            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Quran</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Quran</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('upload-Quran')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Surah Name</label>
                                        <select class="form-control" name="SurahName" value="{{old('SurahName')}}" required>
                                            <option value="">Select Surah Name</option>
                                            <option value="Surat Al-Fatihah">Surat Al-Fatihah</option>
                                            <option value="Surat Al-Baqarah">Surat Al-Baqarah</option>
                                            <option value="Surat Ali 'Imran">Surat Ali 'Imran</option>
                                            <option value="Surat An-Nisa">Surat An-Nisa</option>
                                            <option value="Surat Al-Ma'idah">Surat Al-Ma'idah</option>
                                            <option value="Surat Al-An'am">Surat Al-An'am</option>
                                            <option value="Surat Al-A'raf">Surat Al-A'raf</option>
                                            <option value="Surat Al-Anfal">Surat Al-Anfal</option>
                                            <option value="Surat At-Tawbah">Surat At-Tawbah</option>
                                            <option value="Surat Yunus">Surat Yunus</option>
                                            <option value="Surat Hud">Surat Hud</option>
                                            <option value="Surat Yusuf">Surat Yusuf</option>
                                            <option value="Surat Ar-Ra'd">Surat Ar-Ra'd</option>
                                            <option value="Surat Ibrahim">Surat Ibrahim</option>
                                            <option value="Surat Al-Hijr">Surat Al-Hijr</option>
                                            <option value="Surat An-Nahl">Surat An-Nahl</option>
                                            <option value="Surat Al-Isra">Surat Al-Isra</option>
                                            <option value="Surat Al-Kahf">Surat Al-Kahf</option>
                                            <option value="Surat Maryam">Surat Maryam</option>
                                            <option value="Surat Taha">Surat Taha</option>
                                            <option value="Surat Al-Anbya">Surat Al-Anbya</option>
                                            <option value="Surat Al-Hajj">Surat Al-Hajj</option>
                                            <option value="Surat Al-Mu'minun">Surat Al-Mu'minun</option>
                                            <option value="Surat An-Nur">Surat An-Nur</option>
                                            <option value="Surat Al-Furqan">Surat Al-Furqan</option>
                                            <option value="Surat Ash-Shu'ara">Surat Ash-Shu'ara</option>
                                            <option value="Surat An-Naml">Surat An-Naml</option>
                                            <option value="Surat Al-Qasas">Surat Al-Qasas</option>
                                            <option value="Surat Al-'Ankabut">Surat Al-'Ankabut</option>
                                            <option value="Surat Ar-Rum">Surat Ar-Rum</option>
                                            <option value="Surat Luqman">Surat Luqman</option>
                                            <option value="Surat As-Sajdah">Surat As-Sajdah</option>
                                            <option value="Surat Al-Ahzab">Surat Al-Ahzab</option>
                                            <option value="Surat Saba">Surat Saba</option>
                                            <option value="Surat Fatir">Surat Fatir</option>
                                            <option value="Surat Ya-Sin">Surat Ya-Sin</option>
                                            <option value="Surat As-Saffat">Surat As-Saffat</option>
                                            <option value="Surat Sad">Surat Sad</option>
                                            <option value="Surat Az-Zumar">Surat Az-Zumar</option>
                                            <option value="Surat Ghafir">Surat Ghafir</option>
                                            <option value="Surat Fussilat">Surat Fussilat</option>
                                            <option value="Surat Ash-Shuraa">Surat Ash-Shuraa</option>
                                            <option value="Surat Az-Zukhruf">Surat Az-Zukhruf</option>
                                            <option value="Surat Ad-Dukhan">Surat Ad-Dukhan</option>
                                            <option value="Surat Al-Jathiyah">Surat Al-Jathiyah</option>
                                            <option value="Surat Al-Ahqaf">Surat Al-Ahqaf</option>
                                            <option value="Surat Muhammad">Surat Muhammad</option>
                                            <option value="Surat Al-Fath">Surat Al-Fath</option>
                                            <option value="Surat Al-Hujurat">Surat Al-Hujurat</option>
                                            <option value="Surat Qaf">Surat Qaf</option>
                                            <option value="Surat Adh-Dhariyat">Surat Adh-Dhariyat</option>
                                            <option value="Surat At-Tur">Surat At-Tur</option>
                                            <option value="Surat An-Najm">Surat An-Najm</option>
                                            <option value="Surat Al-Qamar">Surat Al-Qamar</option>
                                            <option value="Surat Ar-Rahman">Surat Ar-Rahman</option>
                                            <option value="Surat Al-Waqi'ah">Surat Al-Waqi'ah</option>
                                            <option value="Surat Al-Hadid">Surat Al-Hadid</option>
                                            <option value="Surat Al-Mujadila">Surat Al-Mujadila</option>
                                            <option value="Surat Al-Hashr">Surat Al-Hashr</option>
                                            <option value="Surat Al-Mumtahanah">Surat Al-Mumtahanah</option>
                                            <option value="Surat As-Saf">Surat As-Saf</option>
                                            <option value="Surat Al-Jumu'ah">Surat Al-Jumu'ah</option>
                                            <option value="Surat Al-Munafiqun">Surat Al-Munafiqun</option>
                                            <option value="Surat At-Taghabun">Surat At-Taghabun</option>
                                            <option value="Surat At-Talaq">Surat At-Talaq</option>
                                            <option value="Surat At-Tahrim">Surat At-Tahrim</option>
                                            <option value="Surat Al-Mulk">Surat Al-Mulk</option>
                                            <option value="Surat Al-Qalam">Surat Al-Qalam</option>
                                            <option value="Surat Al-Haqqah">Surat Al-Haqqah</option>
                                            <option value="Surat Al-Ma'arij">Surat Al-Ma'arij</option>
                                            <option value="Surat Nuh">Surat Nuh</option>
                                            <option value="Surat Al-Jinn">Surat Al-Jinn</option>
                                            <option value="Surat Al-Muzzammil">Surat Al-Muzzammil</option>
                                            <option value="Surat Al-Muddaththir">Surat Al-Muddaththir</option>
                                            <option value="Surat Al-Qiyamah">Surat Al-Qiyamah</option>
                                            <option value="Surat Al-Insan">Surat Al-Insan</option>
                                            <option value="Surat Al-Mursalat">Surat Al-Mursalat</option>
                                            <option value="Surat An-Naba">Surat An-Naba</option>
                                            <option value="Surat An-Nazi'at">Surat An-Nazi'at</option>
                                            <option value="Surat 'Abasa">Surat 'Abasa</option>
                                            <option value="Surat At-Takwir">Surat At-Takwir</option>
                                            <option value="Surat Al-Infitar">Surat Al-Infitar</option>
                                            <option value="Surat Al-Mutaffifin">Surat Al-Mutaffifin</option>
                                            <option value="Surat Al-Inshiqaq">Surat Al-Inshiqaq</option>
                                            <option value="Surat Al-Buruj">Surat Al-Buruj</option>
                                            <option value="Surat At-Tariq">Surat At-Tariq</option>
                                            <option value="Surat Al-A'la">Surat Al-A'la</option>
                                            <option value="Surat Al-Ghashiyah">Surat Al-Ghashiyah</option>
                                            <option value="Surat Al-Fajr">Surat Al-Fajr</option>
                                            <option value="Surat Al-Balad">Surat Al-Balad</option>
                                            <option value="Surat Ash-Shams">Surat Ash-Shams</option>
                                            <option value="Surat Al-Layl">Surat Al-Layl</option>
                                            <option value="Surat Ad-Duhaa">Surat Ad-Duhaa</option>
                                            <option value="Surat Ash-Sharh">Surat Ash-Sharh</option>
                                            <option value="Surat At-Tin">Surat At-Tin</option>
                                            <option value="Surat Al-'Alaq">Surat Al-'Alaq</option>
                                            <option value="Surat Al-Qadr">Surat Al-Qadr</option>
                                            <option value="Surat Al-Bayyinah">Surat Al-Bayyinah</option>
                                            <option value="Surat Az-Zalzalah">Surat Az-Zalzalah</option>
                                            <option value="Surat Al-'Adiyat">Surat Al-'Adiyat</option>
                                            <option value="Surat Al-Qari'ah">Surat Al-Qari'ah</option>
                                            <option value="Surat At-Takathur">Surat At-Takathur</option>
                                            <option value="Surat Al-'Asr">Surat Al-'Asr</option>
                                            <option value="Surat Al-Humazah">Surat Al-Humazah</option>
                                            <option value="Surat Al-Fil">Surat Al-Fil</option>
                                            <option value="Surat Quraysh">Surat Quraysh</option>
                                            <option value="Surat Al-Ma'un">Surat Al-Ma'un</option>
                                            <option value="Surat Al-Kawthar">Surat Al-Kawthar</option>
                                            <option value="Surat Al-Kafirun">Surat Al-Kafirun</option>
                                            <option value="Surat An-Nasr">Surat An-Nasr</option>
                                            <option value="Surat Al-Masad">Surat Al-Masad</option>
                                            <option value="Surat Al-Ikhlas">Surat Al-Ikhlas</option>
                                            <option value="Surat Al-Falaq">Surat Al-Falaq</option>
                                            <option value="Surat An-Nas">Surat An-Nas</option>
                                        </select>
                                        <span style="color: red">@error('SurahName'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Scholar Name</label>
                                        <select class="form-control" name="ScholarName" required>
                                            <option value="">Select Hafidhu | Reciter</option>
                                            <option value="Abdullah Awad al-Juhani">Abdullah Awad al-Juhani</option>
                                            <option value="Abdullah Basfar">Abdullah Basfar</option>
                                            <option value="Abdur-Rahman as-Sudais">Abdur-Rahman as-Sudais</option>
                                            <option value="AbdulMuhsin al-Qasim">AbdulMuhsin al-Qasim</option>
                                            <option value="AbdulBari ath-Thubaity">AbdulBari ath-Thubaity</option>
                                            <option value="Ahmed ibn Ali al-Ajmy">Ahmed ibn Ali al-Ajmy</option>
                                            <option value="AbdulAzeez al-Ahmad">AbdulAzeez al-Ahmad</option>
                                            <option value="AbdulBaset AbdulSamad [Murattal]">AbdulBaset AbdulSamad [Murattal]</option>
                                            <option value="AbdulWadud Haneef">AbdulWadud Haneef</option>
                                            <option value="Aziz Alili">Aziz AliliAbdulBaset AbdulSamad [Mujawwad]</option>
                                            <option value="AbdulBaset AbdulSamad [Mujawwad]">AbdulBaset AbdulSamad [Mujawwad]</option>
                                            <option value="Al-Hussayni Al-'Azazy (with Children)">Al-Hussayni Al-'Azazy (with Children)</option>
                                            <option value="Abdur-Razaq bin Abtan al-Dulaimi [Mujawwad]">Abdur-Razaq bin Abtan al-Dulaimi [Mujawwad]</option>
                                            <option value="Abdullah Khayat">Abdullah Khayat</option>
                                            <option value="Adel Kalbani">Adel Kalbani</option>
                                            <option value="AbdulKareem Al Hazmi">AbdulKareem Al Hazmi</option>
                                            <option value="Abdul-Mun'im Abdul-Mubdi'">Abdul-Mun'im Abdul-Mubdi'</option>
                                            <option value="Abdur-Rashid Sufi">Abdur-Rashid Sufi</option>
                                            <option value="Ahmad al-Huthaify">Ahmad al-Huthaify</option>
                                            <option value="Abu Bakr al-Shatri [Taraweeh]">Abu Bakr al-Shatri [Taraweeh]</option>
                                            <option value="Abdullah Matroud">Abdullah Matroud</option>
                                            <option value="AbdulWadood Haneef">AbdulWadood Haneef</option>
                                            <option value="Ahmad Nauina">Ahmad Nauina</option>
                                            <option value="Akram Al-Alaqmi">Akram Al-Alaqmi</option>
                                            <option value="Ali Hajjaj Alsouasi">Ali Hajjaj Alsouasi</option>
                                            <option value="Asim Abdul Aleem">Asim Abdul Aleem</option>
                                            <option value="Abdallah Abdal">Abdallah Abdal</option>
                                            <option value="Abdullah Ali Jabir">Abdullah Ali Jabir</option>
                                            <option value="Bandar Baleela">Bandar Baleela</option>
                                            <option value="Dr. Shawqy Hamed [Murattal]">Dr. Shawqy Hamed [Murattal]</option>
                                            <option value="Fares Abbad">Fares Abbad</option>
                                            <option value="Fatih Seferagic">Fatih Seferagic</option>
                                            <option value="Hani ar-Rifai">Hani ar-Rifai</option>
                                            <option value="Hamad Sinan">Hamad Sinan</option>
                                            <option value="Hatem Farid">Hatem Farid</option>
                                            <option value="Ibrahim Al-Jibrin">Ibrahim Al-Jibrin</option>
                                            <option value="Imad Zuhair Hafez">Imad Zuhair Hafez</option>
                                            <option value="Ibrahim Al Akhdar">Ibrahim Al Akhdar</option>
                                            <option value="Idrees Abkar">Idrees Abkar</option>
                                            <option value="Khalid al-Qahtani">Khalid al-Qahtani</option>
                                            <option value="Mishari Rashid al-`Afasy">Mishari Rashid al-`Afasy</option>
                                            <option value="Muhammad Siddiq al-Minshawi">Muhammad Siddiq al-Minshawi</option>
                                            <option value="Muhammad Jibreel">Muhammad Jibreel</option>
                                            <option value="Muhammad al-Mehysni">Muhammad al-Mehysni</option>
                                            <option value="Muhammad Siddiq al-Minshawi [Mujawwad]">Muhammad Siddiq al-Minshawi [Mujawwad]</option>
                                            <option value="Muhammad al-Luhaidan">Muhammad al-Luhaidan</option>
                                            <option value="Muhammad Abdul-Kareem">Muhammad Abdul-Kareem</option>
                                            <option value="Mustafa al-`Azawi">Mustafa al-`Azawi</option>
                                            <option value="Muhammad Hassan">Muhammad Hassan</option>
                                            <option value="Mostafa Ismaeel">Mostafa Ismaeel</option>
                                            <option value="Muhammad Sulaiman Patel">Muhammad Sulaiman Patel</option>
                                            <option value="Mohammad Al-Tablawi">Mohammad Al-Tablawi</option>
                                            <option value="Mohammad Ismaeel Al-Muqaddim">Mohammad Ismaeel Al-Muqaddim</option>
                                            <option value="Muhammad Ayyoob [Taraweeh]">Muhammad Ayyoob [Taraweeh]</option>
                                            <option value="Masjid Quba Taraweeh 1434">Masjid Quba Taraweeh 1434</option>
                                            <option value="Muhammad Khaleel">Muhammad Khaleel</option>
                                            <option value="Mahmoud Khaleel Al-Husary">Mahmoud Khaleel Al-Husary</option>
                                            <option value="Mahmood Ali Al-Bana">Mahmood Ali Al-Bana</option>
                                            <option value="Maher al-Muaiqly">Maher al-Muaiqly</option>
                                            <option value="Nabil ar-Rifai">Nabil ar-Rifai</option>
                                            <option value="Nasser Al Qatami">Nasser Al Qatami</option>
                                            <option value="Sa`ud ash-Shuraym">Sa`ud ash-Shuraym</option>
                                            <option value="Saad al-Ghamdi">Saad al-Ghamdi</option>
                                            <option value="Sahl Yasin">Sahl Yasin</option>
                                            <option value="Salah Bukhatir">Salah Bukhatir</option>
                                            <option value="Sudais and Shuraym">Sudais and Shuraym</option>
                                            <option value="Saleh al Taleb">Saleh al Taleb</option>
                                            <option value="Salah al-Budair">Salah al-Budair</option>
                                            <option value="Sadaqat `Ali">Sadaqat `Ali</option>
                                            <option value="Salah Al-Hashim">Salah Al-Hashim</option>
                                            <option value="Tawfeeq ibn Sa`id as-Sawa'igh">Tawfeeq ibn Sa`id as-Sawa'igh</option>
                                            <option value="Wadee Hammadi Al Yamani">Wadee Hammadi Al Yamani</option>
                                            <option value="Yasser ad-Dussary">Yasser ad-Dussary</option>

                                            <option value=""></option>
                                            <option value=""></option>
                                            
                                            <option value="Makkah Taraweeh 1424">Makkah Taraweeh 1424</option>
                                            <option value="Makkah Taraweeh 1425">Makkah Taraweeh 1425</option>
                                            <option value="Makkah Taraweeh 1426">Makkah Taraweeh 1426</option>
                                            <option value="Makkah Taraweeh 1427">Makkah Taraweeh 1427</option>
                                            <option value="Makkah Taraweeh 1428">Makkah Taraweeh 1428</option>
                                            <option value="Makkah Taraweeh 1429">Makkah Taraweeh 1429</option>
                                            <option value="Makkah Taraweeh 1430">Makkah Taraweeh 1430</option>
                                            <option value="Makkah Taraweeh 1431">Makkah Taraweeh 1431</option>
                                            <option value="Makkah Taraweeh 1432">Makkah Taraweeh 1432</option>
                                            <option value="Makkah Taraweeh 1433">Makkah Taraweeh 1433</option>
                                            <option value="Makkah Taraweeh 1434">Makkah Taraweeh 1434</option>
                                            <option value="Makkah Taraweeh 1435">Makkah Taraweeh 1435</option>
                                            <option value="Makkah Taraweeh 1436">Makkah Taraweeh 1436</option>
                                            <option value="Makkah Taraweeh 1437">Makkah Taraweeh 1437</option>
                                            <option value="Makkah Taraweeh 1438">Makkah Taraweeh 1438</option>
                                            <option value="Makkah Taraweeh 1439">Makkah Taraweeh 1439</option>
                                            <option value="Makkah Taraweeh 1440">Makkah Taraweeh 1440</option>
                                            <option value="Makkah Taraweeh 1441">Makkah Taraweeh 1441</option>
                                            

                                            <option value=""></option>
                                            <option value=""></option>


                                            <option value="Madinah Taraweeh 1419">Madinah Taraweeh 1419</option>
                                            <option value="Madinah Taraweeh 1423">Madinah Taraweeh 1423</option>
                                            <option value="Madinah Taraweeh 1426">Madinah Taraweeh 1426</option>
                                            <option value="Madinah Taraweeh 1427">Madinah Taraweeh 1427</option>
                                            <option value="Madinah Taraweeh 1428">Madinah Taraweeh 1428</option>
                                            <option value="Madinah Taraweeh 1429">Madinah Taraweeh 1429</option>
                                            <option value="Madinah Taraweeh 1430">Madinah Taraweeh 1430</option>
                                            <option value="Madinah Taraweeh 1431">Madinah Taraweeh 1431</option>
                                            <option value="Madinah Taraweeh 1432">Madinah Taraweeh 1432</option>
                                            <option value="Madinah Taraweeh 1433">Madinah Taraweeh 1433</option>
                                            <option value="Madinah Taraweeh 1434">Madinah Taraweeh 1434</option>
                                            <option value="Madinah Taraweeh 1435">Madinah Taraweeh 1435</option>
                                            <option value="Madinah Taraweeh 1436">Madinah Taraweeh 1436</option>
                                            <option value="Madinah Taraweeh 1437">Madinah Taraweeh 1437</option>
                                            <option value="Madinah Taraweeh 1439">Madinah Taraweeh 1439</option>
                                            <option value="Madinah Taraweeh 1440">Madinah Taraweeh 1440</option>
                                            <option value="Madinah Taraweeh 1441">Madinah Taraweeh 1441</option>
                                            <option value="Madinah Taraweeh 1442">Madinah Taraweeh 1442</option>
                                            
                                            <option value=""></option>
                                            <option value=""></option>AbdulBaset AbdulSamad with Naeem Sultan [Pickthall Translation]
                                            
                                            <option value="AbdulBaset AbdulSamad [Warsh]">AbdulBaset AbdulSamad [Warsh]</option>
                                            <option value="Abdur-Rashid Sufi [Soosi]">Abdur-Rashid Sufi [Soosi]</option>
                                            <option value="Abdur-Rashid Sufi [Khalaf]">Abdur-Rashid Sufi [Khalaf]</option>
                                            <option value="Abdur-Rashid Sufi [Abi al-Haarith an al-Kasaa'ee]">Abdur-Rashid Sufi [Abi al-Haarith an al-Kasaa'ee]</option>
                                            <option value="Abdur-Rashid Sufi [ad-Doori an Abi Amr]">Abdur-Rashid Sufi [ad-Doori an Abi Amr]</option>
                                            <option value="Abdur-Rashid Sufi [Shu'bah an Asim]">Abdur-Rashid Sufi [Shu'bah an Asim]</option>
                                            <option value="Ali al-Huthaify [Qaloon]">Ali al-Huthaify [Qaloon]</option>
                                            <option value="Abdur-Rashid Sufi [Soosi, 2020]">Abdur-Rashid Sufi [Soosi, 2020]</option>
                                            <option value="Mahmoud Khalil Al-Husary [Doori]">Mahmoud Khalil Al-Husary [Doori]</option>
                                            <option value="Noreen Siddiq [ad-Doori an Abi Amr]">Noreen Siddiq [ad-Doori an Abi Amr]</option>
                                            
                                            <option value=""></option>
                                            <option value=""></option>
                                            
                                            <option value="AbdulBaset AbdulSamad with Naeem Sultan [Pickthall Translation]">AbdulBaset AbdulSamad with Naeem Sultan [Pickthall Translation]</option>
                                            <option value="AbdulBaset AbdulSamad with Ibrahim Walk [Saheeh Intl Translation]">AbdulBaset AbdulSamad with Ibrahim Walk [Saheeh Intl Translation]</option>
                                            <option value="Abdullah Basfar with Ibrahim Walk [Saheeh Intl Translation]Muhammad Ayyub with Mikaal Waters [Muhsin Khan Translation]">Abdullah Basfar with Ibrahim Walk [Saheeh Intl Translation]Muhammad Ayyub with Mikaal Waters [Muhsin Khan Translation]</option>
                                            <option value="Muhammad Ayyub with Mikaal Waters [Muhsin Khan Translation]">Muhammad Ayyub with Mikaal Waters [Muhsin Khan Translation]</option>
                                            <option value="Mishari ibn Rashid al-`Afasy with Saabir [Muhsin Khan Translation]">Mishari ibn Rashid al-`Afasy with Saabir [Muhsin Khan Translation]</option>
                                            <option value="Mishari ibn Rashid al-`Afasy with Ibrahim Walk [Saheeh Intl Translation]">Mishari ibn Rashid al-`Afasy with Ibrahim Walk [Saheeh Intl Translation]</option>
                                            <option value="Sudais and Shuraym with Aslam Athar [Pickthall Translation]">Sudais and Shuraym with Aslam Athar [Pickthall Translation]</option>
                                            <option value="Shakir Qasami with Aslam Athar [Pickthall Translation]">Shakir Qasami with Aslam Athar [Pickthall Translation]</option>
                                            <option value="Sudais and Shuraym with Naeem Sultan [Pickthall Translation]">Sudais and Shuraym with Naeem Sultan [Pickthall Translation]</option>
                                            <option value="Sudais and Shuraym [Urdu Translation]">Sudais and Shuraym [Urdu Translation]</option>
                                            
                                        </select>
                                        <span style="color: red">@error('ScholarName'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                
   
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group fallback w-100">
                                     <strong>Upload Quran Audio :</strong><input type="file" name="QuranAudio" class="dropify"  required>
                                     <span style="color: red">@error('QuranAudio'){{$message}} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection