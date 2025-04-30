<!-- Bungkus keseluruhan dengan satu div -->
@php use Illuminate\Support\Str; @endphp
<div class="w-full">
    <!-- Tabel untuk header saja -->
    <table class="w-full text-lg border-collapse table-fixed">
        <thead>
            <tr class="border-b flex ">
                <th class="text-center text-gray-400 p-4" style="width: 50%">Pernyataan</th>
                <th class="text-center text-gray-400 p-4" style="width: 25%">Kategori</th>
                <th class="text-center text-gray-400 p-4" style="width: 25%">Nilai</th>
            </tr>
        </thead>
    </table>

    <!-- Kontainer dengan overflow untuk body -->
    @php $gender = $testRmib->psikotestPaidTest->userPsikotestPaid->gender; @endphp
    <div class="max-h-40 overflow-y-auto" style="max-height: 250px">
        <table class="w-full text-lg border-collapse table-fixed">
            <tbody class="border-b flex flex-col">
                @foreach ($answer->questionRmib->statements as $statement)
                @php
                    $categoryName = Str::of($statement->category->name)->replace(' ', '_')->lower();
                @endphp
                <tr class="border-b">
                    <td class="p-4" style="width: 50%">{{ $gender == "laki-laki" ? $statement->male_statement : $statement->female_statement }}</td>
                    <td class="text-center p-4" style="width: 25%">{{ Str::title($statement->category->name) }}</td>
                    <td class="p-4 text-center" style="width: 25%">{{ $answer->$categoryName }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>