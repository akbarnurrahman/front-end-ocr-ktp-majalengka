    <div id="modalError" style="display:none"
        <div class="modal fade dialogbox" id="DialogIconedDanger" data-backdrop="static" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document" >
                <div class="modal-content">
                    <div class="modal-icon text-danger">
                        <ion-icon name="close-circle"></ion-icon>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title">PIN SALAH</h5>
                    </div>
                    <div class="modal-body">
                        pastikan pin anda sesuai.
                    </div>
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <a href="#" class="btn" data-dismiss="modal">CLOSE</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </div>

        <div id="modalInfo" style="display:none"
        <div class="modal fade dialogbox" id="DialogIconedDanger" data-backdrop="static" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document" >
                <div class="modal-content">
                    <div class="modal-icon text-danger">
                        <ion-icon name="close-circle"></ion-icon>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title">Ups</h5>
                    </div>
                    <div class="modal-body">
                        Tolong Isi Pin Terlebih Dahulu.
                    </div>
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <a href="#" class="btn" data-dismiss="modal">CLOSE</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </div>

        <div id="modalSuccess" style="display:none"
        <div class="modal fade dialogbox" id="DialogIconedDanger" data-backdrop="static" tabindex="-1" role="dialog" >
            <div class="modal-dialog" role="document" >
                <div class="modal-content">
                    <div class="modal-icon text-success">
                        <ion-icon name="close-circle"></ion-icon>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title">Login Berhasil</h5>
                    </div>
                    <div class="modal-body">
                        klik ok untuk melanjutkan
                    </div>
                    <div class="modal-footer">
                        <div class="btn-inline">
                            <a href="#" class="btn" id="ok-beres-login" data-dismiss="modal">OK</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         </div>


         <div class="modal fade dialogbox" id="DialogBlockButton" data-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-footer">
                        <div class="btn-list">
                        <input type="file" style="display:none" id="upload-kamera" accept="image/*" capture="camera" />
                        <a href="#" class="btn btn-text-primary btn-block" id="using-kamera"data-dismiss="modal">
                        <ion-icon name="camera-outline"></ion-icon>
                        KAMERA
                        </a>
                        <input type="file" style="display:none" id="upload-files" accept="image/*"  />
                        <a href="#" class="btn btn-text-primary btn-block" id="using-files"data-dismiss="modal">
                        <ion-icon name="folder-open-outline"></ion-icon>
                        FOLDER
                        </a>
                            <a href="#" class="btn btn-text-secondary btn-block" data-dismiss="modal">
                                KEMBALI
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade dialogbox" id="DialogUbahPin" data-backdrop="static" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah Kode Pin</h5>
                    </div>
                    <form>
                        <div class="modal-body text-left mb-2">
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="email1">Pin Lama</label>
                                    <input type="number" pattern="\d*" maxlength="6" class="form-control" id="email1" >
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="password1">Pin Baru </label>
                                    <input type="number" pattern="\d*" maxlength="6" class="form-control" id="password1">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="btn-inline">
                                <button type="button" class="btn btn-text-danger" id="batal-ubah-pin" data-dismiss="modal">BATAL</button>
                                <button type="button" class="btn btn-text-primary" data-dismiss="modal" id="btn-ubah-pin-action">UBAH</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>