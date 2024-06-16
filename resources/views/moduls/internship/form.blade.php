<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $userInternship->email ?? '') }}" required>
</div>
<div class="form-group">
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $userInternship->nama_lengkap ?? '') }}" required>
</div>
<div class="form-group">
    <label for="nama_panggilan">Nama Panggilan</label>
    <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" value="{{ old('nama_panggilan', $userInternship->nama_panggilan ?? '') }}" required>
</div>
<div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $userInternship->tanggal_lahir ?? '') }}" required>
</div>
<div class="form-group">
    <label for="no_whatsapp">No WhatsApp</label>
    <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp" value="{{ old('no_whatsapp', $userInternship->no_whatsapp ?? '') }}" required>
</div>
<div class="form-group">
    <label for="asal_kota">Asal Kota</label>
    <input type="text" class="form-control" id="asal_kota" name="asal_kota" value="{{ old('asal_kota', $userInternship->asal_kota ?? '') }}" required>
</div>
<div class="form-group">
    <label for="asal_pendidikan">Asal Pendidikan</label>
    <input type="text" class="form-control" id="asal_pendidikan" name="asal_pendidikan" value="{{ old('asal_pendidikan', $userInternship->asal_pendidikan ?? '') }}" required>
</div>
<div class="form-group">
    <label for="status_kelas">Status Kelas</label>
    <input type="text" class="form-control" id="status_kelas" name="status_kelas" value="{{ old('status_kelas', $userInternship->status_kelas ?? '') }}" required>
</div>
<div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ old('jurusan', $userInternship->jurusan ?? '') }}" required>
</div>
<div class="form-group">
    <label for="akun_instagram">Akun Instagram</label>
    <input type="text" class="form-control" id="akun_instagram" name="akun_instagram" value="{{ old('akun_instagram', $userInternship->akun_instagram ?? '') }}" required>
</div>
<div class="form-group">
    <label for="akun_tiktok">Akun TikTok</label>
    <input type="text" class="form-control" id="akun_tiktok" name="akun_tiktok" value="{{ old('akun_tiktok', $userInternship->akun_tiktok ?? '') }}" required>
</div>
<div class="form-group">
    <label for="akun_linkdin">Akun LinkedIn</label>
    <input type="text" class="form-control" id="akun_linkdin" name="akun_linkdin" value="{{ old('akun_linkdin', $userInternship->akun_linkdin ?? '') }}" required>
</div>
<div class="form-group">
    <label for="sumber_informasi">Sumber Informasi</label>
    <input type="text" class="form-control" id="sumber_informasi" name="sumber_informasi" value="{{ old('sumber_informasi', $userInternship->sumber_informasi ?? '') }}" required>
</div>
<div class="form-group">
    <label for="tautan_cv">Tautan CV</label>
    <input type="url" class="form-control" id="tautan_cv" name="tautan_cv" value="{{ old('tautan_cv', $userInternship->tautan_cv ?? '') }}" required>
</div>
<div class="form-group">
    <label for="tautan_portofolio">Tautan Portofolio</label>
    <input type="url" class="form-control" id="tautan_portofolio" name="tautan_portofolio" value="{{ old('tautan_portofolio', $userInternship->tautan_portofolio ?? '') }}" required>
</div>
<div class="form-group">
    <label for="tautan_berkas_ss">Tautan Berkas SS</label>
    <input type="url" class="form-control" id="tautan_berkas_ss" name="tautan_berkas_ss" value="{{ old('tautan_berkas_ss', $userInternship->tautan_berkas_ss ?? '') }}" required>
</div>
<div class="form-group">
    <label for="motivasi">Motivasi</label>
    <textarea class="form-control" id="motivasi" name="motivasi" required>{{ old('motivasi', $userInternship->motivasi ?? '') }}</textarea>
</div>
