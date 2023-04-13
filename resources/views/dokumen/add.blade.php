<x-app-layout>
    <div class="w-100 h-screen bg-white">
        <div class="w-100">
            <form class="bg-white px-8 pt-6 pb-8 w-1/2">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="no">
                        No
                    </label>
                    <input disabled readonly class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="no" name="no" type="text" value={{ $str_random }}>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="kategori">
                        Kategori
                    </label>
                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="kategori">
                        <option disabled>--Pilih Kategori--</option>
                        <option value="surat izin">Surat Izin</option>
                        <option value="sertifikat">Sertifikat</option>
                        <option value="berkas internal">Berkas Internal</option>
                        <option value="berkas kesehatan">Berkas Kesehatan</option>
                        <option value="arsip umum">Arsip Umum</option>
                        <option value="surat keputusan">Surat Keputusan</option>
                        <option value="berkas kerja">Berkas Kerja</option>
                        <option value="surat keluar">Surat Keluar</option>
                        <option value="surat masuk">Surat Masuk</option>
                      </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                        Nama
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" name="nama" type="text" placeholder="Nama">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="deskripsi">
                        Deskripsi
                    </label>
                    <textarea name="deskripsi" id="deskripsi" cols="65" rows="5" class="shadow appearance-none border rounded w-full"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        File
                    </label>
                    <input name="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="file" type="file">
                </div>
                <div class="flex items-center gap-2">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Simpan
                    </button>
                    <button class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Kembali
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>