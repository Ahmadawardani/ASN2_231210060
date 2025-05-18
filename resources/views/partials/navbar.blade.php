<nav class="navbar navbar-expand-lg navbar-light bg-light">
     <div class="container">
         <a class="navbar-brand" href="#">HMPS-SI</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto">
                 <li class="nav-item">
                     <a class="nav-link" href="/">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/anggota">Anggota</a>
                 </li>
                 <li class="nav-item">
    <a class="nav-link" href="{{ route('kontak.index') }}">Kontak</a>
</li>
                 <li class="nav-item">
    <a class="nav-link" href="{{ route('divisi.index') }}">Divisi</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('kegiatan.index') }}">Kegiatan</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('berita.index') }}">Berita</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('struktur_panitia.index') }}">Kepanitiaan</a>
</li>
             </ul>
         </div>
     </div>
 </nav>