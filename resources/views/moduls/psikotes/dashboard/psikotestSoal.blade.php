@extends('moduls.psikotes.dashboard.layouts.main', [
'title' => 'Dashboard',
'active' => 'Dashboard Psikotest',
'modul' => 'psikotestSoal',
])

@section('content-dashboard')
<section class="flex w-full">
  <div class="flex flex-col w-full">
    <div class="w-full">
      <div class="py-4 md:py-4">
        <div>
          <p tabindex="0" class="focus:outline-none text-start text-base sm:text-lg md:text-2xl lg:text-4xl font-bold leading-normal text-gray-800 mb-2">
            Edit Soal</p>
          <p class="text-start w-3/5 text-disabled">Fitur ini menampilkan data soal yang tersedia di alat tes Papi Kostick</p>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:flex-row w-full gap-6">
      <div class="w-full bg-white rounded-md p-4">
      <h2 class="text-xl font-bold mb-4" style="margin-left: 20px;">All Responden</h2>

      <table class="w-full table-auto text-center border-collapse" style="font-size: 15px; font-weight: 600;">
        <thead>
          <tr class="bg-white text-gray-400 border-b border-gray-200">
            <th class="px-4 py-2">No</th>
            <th class="px-4 py-2">Choice 1</th>
            <th class="px-4 py-2">Choice 2</th>
            <th class="px-4 py-2">Date</th>
            <th class="px-4 py-2">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-200">
            <td class="px-4 py-2">1</td>
            <td class="px-4 py-2">Saya bukan seorang pemurung</td>
            <td class="px-4 py-2">Saya seorang pekerja keras</td>
            <td class="px-4 py-2">18-04-2024</td>
            <td class="px-4 py-2 flex justify-center space-x-2">
              <button class="w-8 h-8 bg-green-500 text-white rounded flex items-center justify-center hover:bg-green-600" aria-label="Add">
                <span class="text-xl font-bold">+</span>
              </button>
              <button class="w-8 h-8 bg-red-500 text-white rounded flex items-center justify-center hover:bg-red-600" aria-label="Remove">
                <span class="text-xl font-bold">-</span>
              </button>
              <button class="w-8 h-8 bg-blue-500 text-white rounded flex items-center justify-center hover:bg-blue-600" aria-label="Edit">
                <span class="text-xl font-bold" style="display: inline-block; transform: scaleX(-1);">✎</span>
              </button>
            </td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="px-4 py-2">2</td>
            <td class="px-4 py-2">Saya bukan seorang pemurung</td>
            <td class="px-4 py-2">Saya seorang pekerja keras</td>
            <td class="px-4 py-2">18-04-2024</td>
            <td class="px-4 py-2 flex justify-center space-x-2">
              <button class="w-8 h-8 bg-green-500 text-white rounded flex items-center justify-center hover:bg-green-600" aria-label="Add">
                <span class="text-xl font-bold">+</span>
              </button>
              <button class="w-8 h-8 bg-red-500 text-white rounded flex items-center justify-center hover:bg-red-600" aria-label="Remove">
                <span class="text-xl font-bold">-</span>
              </button>
              <button class="w-8 h-8 bg-blue-500 text-white rounded flex items-center justify-center hover:bg-blue-600" aria-label="Edit">
                <span class="text-xl font-bold" style="display: inline-block; transform: scaleX(-1);">✎</span>
              </button>
            </td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="px-4 py-2">3</td>
            <td class="px-4 py-2">Saya bukan seorang pemurung</td>
            <td class="px-4 py-2">Saya seorang pekerja keras</td>
            <td class="px-4 py-2">18-04-2024</td>
            <td class="px-4 py-2 flex justify-center space-x-2">
              <button class="w-8 h-8 bg-green-500 text-white rounded flex items-center justify-center hover:bg-green-600" aria-label="Add">
                <span class="text-xl font-bold">+</span>
              </button>
              <button class="w-8 h-8 bg-red-500 text-white rounded flex items-center justify-center hover:bg-red-600" aria-label="Remove">
                <span class="text-xl font-bold">-</span>
              </button>
              <button class="w-8 h-8 bg-blue-500 text-white rounded flex items-center justify-center hover:bg-blue-600" aria-label="Edit">
                <span class="text-xl font-bold" style="display: inline-block; transform: scaleX(-1);">✎</span>
              </button>
            </td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="px-4 py-2">4</td>
            <td class="px-4 py-2">Saya bukan seorang pemurung</td>
            <td class="px-4 py-2">Saya seorang pekerja keras</td>
            <td class="px-4 py-2">18-04-2024</td>
            <td class="px-4 py-2 flex justify-center space-x-2">
              <button class="w-8 h-8 bg-green-500 text-white rounded flex items-center justify-center hover:bg-green-600" aria-label="Add">
                <span class="text-xl font-bold">+</span>
              </button>
              <button class="w-8 h-8 bg-red-500 text-white rounded flex items-center justify-center hover:bg-red-600" aria-label="Remove">
                <span class="text-xl font-bold">-</span>
              </button>
              <button class="w-8 h-8 bg-blue-500 text-white rounded flex items-center justify-center hover:bg-blue-600" aria-label="Edit">
                <span class="text-xl font-bold" style="display: inline-block; transform: scaleX(-1);">✎</span>
              </button>
            </td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="px-4 py-2">5</td>
            <td class="px-4 py-2">Saya bukan seorang pemurung</td>
            <td class="px-4 py-2">Saya seorang pekerja keras</td>
            <td class="px-4 py-2">18-04-2024</td>
            <td class="px-4 py-2 flex justify-center space-x-2">
              <button class="w-8 h-8 bg-green-500 text-white rounded flex items-center justify-center hover:bg-green-600" aria-label="Add">
                <span class="text-xl font-bold">+</span>
              </button>
              <button class="w-8 h-8 bg-red-500 text-white rounded flex items-center justify-center hover:bg-red-600" aria-label="Remove">
                <span class="text-xl font-bold">-</span>
              </button>
              <button class="w-8 h-8 bg-blue-500 text-white rounded flex items-center justify-center hover:bg-blue-600" aria-label="Edit">
                <span class="text-xl font-bold" style="display: inline-block; transform: scaleX(-1);">✎</span>
              </button>
            </td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="px-4 py-2">6</td>
            <td class="px-4 py-2">Saya bukan seorang pemurung</td>
            <td class="px-4 py-2">Saya seorang pekerja keras</td>
            <td class="px-4 py-2">18-04-2024</td>
            <td class="px-4 py-2 flex justify-center space-x-2">
              <button class="w-8 h-8 bg-green-500 text-white rounded flex items-center justify-center hover:bg-green-600" aria-label="Add">
                <span class="text-xl font-bold">+</span>
              </button>
              <button class="w-8 h-8 bg-red-500 text-white rounded flex items-center justify-center hover:bg-red-600" aria-label="Remove">
                <span class="text-xl font-bold">-</span>
              </button>
              <button class="w-8 h-8 bg-blue-500 text-white rounded flex items-center justify-center hover:bg-blue-600" aria-label="Edit">
                <span class="text-xl font-bold" style="display: inline-block; transform: scaleX(-1);">✎</span>
              </button>
            </td>
          </tr>
        </tbody>
      </table>

        <div class="flex justify-between items-center mt-4">
          <div class="text-gray-600"></div>
          <div>
            <ul class="inline-flex text-xs items-center">
              <li><button class="px-3 mx-1 py-1 bg-gray-200 rounded">&lt;</button></li>
              <li><button class="px-3 py-1 bg-gray-200 rounded">1</button></li>
              <li><button class="px-3 mx-1 py-1 bg-gray-200 rounded">2</button></li>
              <li><button class="px-3 py-1 bg-gray-200 rounded">3</button></li>
              <li><button class="px-3 mx-1 py-1 bg-gray-200 rounded">4</button></li>
              <li><span class="px-3 py-1">...</span></li>
              <li><button class="px-3 mx-1 py-1 bg-gray-200 rounded">40</button></li>
              <li><button class="px-3 py-1 bg-gray-200 rounded">&gt;</button></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection