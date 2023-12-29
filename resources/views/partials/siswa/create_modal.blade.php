<div class="modal fade" id="createAkun" tabindex="-1" role="dialog" aria-labelledby="createAkunLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createAkunLabel">Tambah Akun Siswa/Siswi</h5>
            </div>
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf
                <div class="modal-body container-fluid">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input autocomplete="off" type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
            
                        <label for="kelas" class="form-label">Kelas</label>
                        <input autocomplete="off" type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('kelas') }}">
                        @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
            
                        <label for="email" class="form-label">Email</label>
                        <input autocomplete="off" type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
            
                        <label for="password" class="form-label">Password</label>
                        <input autocomplete="off" type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </form>            
        </div>
    </div>
</div>
