<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('psikotest-paid.postRegPage2') }}" method="POST">
        @csrf
        <label for="service">Select Service</label>
        <select name="service" id="service" required>
            <option value="" disabled selected>Select Service</option>
            <option value="online">Online (dilakukan melalui Zoom)</option>
            <option value="offline">Offline (Hanya untuk di Surabaya)</option>
        </select>

        <label for="psikotest_category_id">Select Category Psikotest</label>
        <select id="psikotest_category_id" required>
            <option value="" disabled selected>Select Psikotest Category</option>
            @foreach ($psikotestCategoryTypes as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <label for="psikotest_type_id">Select Psikotest Type</label>
        <select name="psikotest_type_id" id="psikotest_type_id" required>
            <option value="" disabled selected>Select Psikotest Type</option>
        </select>

        <label for="price">Price</label>
        <input type="text" id="price" readonly>

        <label for="preference_schedule">Preference Schedule</label>
        <input type="datetime-local" name="preference_schedule" id="preference_schedule"
            placeholder="Preference Schedule" required>

        <button type="submit">Next</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const psikotestTypes = @json($psikotestTypes);
            const categorySelect = document.getElementById('psikotest_category_id');
            const typeSelect = document.getElementById('psikotest_type_id');
            const priceInput = document.getElementById('price');

            categorySelect.addEventListener('change', function() {
                const selectedCategoryId = this.value;
                const filteredTypes = psikotestTypes.filter(type => type.category_psikotest_type_id ==
                    selectedCategoryId);

                typeSelect.innerHTML = '<option value="" disabled selected>Select Psikotest Type</option>';
                filteredTypes.forEach(function(type) {
                    typeSelect.innerHTML +=
                        `<option value="${type.id}" data-price="${type.price}">${type.name}</option>`;
                });
            });

            typeSelect.addEventListener('change', function() {
                const selectedType = typeSelect.options[typeSelect.selectedIndex];
                const price = selectedType.getAttribute('data-price');
                priceInput.value = price ? `Rp ${price}` : '';
            });
        });
    </script>
</body>

</html>
