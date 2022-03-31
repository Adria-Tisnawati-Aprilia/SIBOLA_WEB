
                    <div class="form-group">
                        <label for="kode_arena" class="sr-only">Kode Arena</label>
                        <input type="text" id="kode_arena" class="form-control" placeholder="Kode Arena"
                        name="kode_arena" value="{{ $edit_arena->kode_arena }}">
                    </div>
                    <div class="form-group">
                        <label for="nama_arena" class="sr-only">Nama Arena</label>
                        <input type="text" id="nama_arena" class="form-control" placeholder="Nama Arena"
                        name="nama_arena" value="{{ $edit_arena->nama_arena }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="sr-only">Alamat</label>

                        <div class="form-group form-label-group">
                            <textarea class="form-control" id="alamat" rows="3"
                            placeholder="Alamat" name="alamat" >{{ $edit_arena->alamat }}</textarea>
                            <label for="label-textarea"></label>
                        </div>
                    </div>
