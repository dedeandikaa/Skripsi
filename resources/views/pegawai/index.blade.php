<x-app-layout>
    <section class="section main-section">
        <div class="card has-table">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
              Data Pegawai
            </p>
          </header>
          <div class="card-content">
            <table>
              <thead>
              <tr>
                <th>Nama</th>
                <th>NIP</th>
                <th>Pekerjaan</th>
                <th>Status</th>
                <th>Created</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td data-label="Nama">Rebecca Bauch</td>
                <td data-label="NIP">201081982101</td>
                <td data-label="Pekerjaan">Guru</td>
                <td data-label="Status">Honorer</td>
                <td data-label="Created">
                  <small class="text-gray-500" title="Oct 25, 2021">Oct 25, 2021</small>
                </td>
                <td class="actions-cell">
                  <div class="buttons right nowrap">
                    <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              </tbody>
            </table>
            <div class="table-pagination">
              <div class="flex items-center justify-between">
                <div class="buttons">
                  <button type="button" class="button active">1</button>
                  <button type="button" class="button">2</button>
                  <button type="button" class="button">3</button>
                </div>
                <small>Page 1 of 3</small>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-app-layout>