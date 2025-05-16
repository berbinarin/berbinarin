@extends('layouts.main-new', [
    'title' => 'Berbinar Insightful Indonesia',
    'active' => 'Karir',
    'page' => 'keluarga-berbinar',
])


@section('content')

    {{--    @dd($listStaff)--}}

    {{--header & selection menu--}}
    <section class="mt-32 w-full mx-auto min-w-96 bg-[#F7F9FA] lg:mt-44">
        {{--filter tahun--}}
        <div class="w-full mx-auto">
            {{--heading--}}
            <h1 class="font-semibold text-4xl text-center text-slate-900 py-2 mb-8 md:text-5xl lg:mb-16">Keluarga <span
                    class="text-white bg-primary p-2">Berbinar</span></h1>

            <div class="w-full mx-auto flex justify-center items-center mb-4 relative z-10 px-4 sm:px-14">
                {{--desktop--}}
                <div
                    class="w-full grid grid-cols-2 lg:grid-cols-4 lg:grid-rows-1 grid-rows-2 gap-4 px-2 justify-items-center">
                    @foreach($availableYears as $key =>  $year)
                        <button
                            id="year-{{$key}}"
                            onclick="handleSelectYears(`year-{{$key}}`, {{$key}})"
                            class="block font-semibold text-lg md:text-xl text-center tracking-wide px-4 py-1 w-36 sm:w-48 md:w-56 md:px-5 xl:py-2 border-3 border-transparent text-white bg-primary rounded-md lg:w-full">
                            {{$year}}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
        {{--divider path--}}
        <div class="mx-auto h-20 relative md:mb-5 xl:mb-7">
            <img src="{{asset("assets/images/landing/keluarga-berbinar/path.png")}}" alt="divider"
                 class="object-cover h-auto min-w-96 w-screen -translate-y-16 sm:-translate-y-24 md:-translate-y-28 lg:-translate-y-20 xl:-translate-y-32 2xl:scale-y-75 2xl:-translate-y-52 3xl:scale-y-75 3xl:-translate-y-54">
        </div>

        {{--[MOBILE] divisi yang dipilih--}}
        <div class="w-full px-4 sm:px-14 mb-4 lg:hidden">
            <button onclick="handleToggleDropdownDivisionMobile()"
                    class="mb-4 font-normal text-base text-white bg-gradient-to-r from-[#F7B23B] to-[#AD7D29] rounded-md text-center h-14 px-8 w-full mx-auto hover:shadow-lg hover:bg-opacity-80">
                <span id="selected-division">select division</span>
            </button>

            {{--Dropdown menu for selecting a division--}}
            <div id="division-dropdown"
                 class="hidden w-full mx-auto flex-col items-center justify-start gap-4 py-2 px-4 bg-gradient-to-b from-transparent to-[#F7B23B33]">
                {{--render dropdown menu item dynamically--}}
            </div>

        </div>

        {{--[MOBILE] drop down menu-subdivisi--}}
        <div id="subdivision-menu" class="hidden w-full px-4 mb-4 mx-auto flex-col lg:hidden">
            <button
                id="subdivision-button"
                onclick="handleToggleDropdownSubdivisionMobile()"
                class="mb-4 font-normal text-base text-[#15323D] bg-[#3986A340] rounded-md text-center h-12 px-8 w-3/4 sm:w-1/2 mx-auto hover:shadow-lg hover:bg-opacity-80 block border-2 border-[#15323D] shadow-md">
                <span id="selected-subdivision">Select Subdivision</span>
            </button>

            {{--Dropdown menu for selecting a division--}}
            <div id="subdivision-dropdown"
                 class="hidden w-full mx-auto flex-col items-center justify-start gap-4 py-2 px-4 bg-gradient-to-b from-white from-20% to-[#3986A333]">
                {{--render dropdown menu item dynamically--}}
            </div>
        </div>

        <div
            class="lg:mx-auto lg:flex lg:justify-start lg:items-start lg:space-x-12 xl:pe-14 lg:bg-gradient-to-r lg:from-[#DDEAF0] lg:to-[#F7F9FA] lg:pt-16">
            {{--MENU DIVISI DESKTOP--}}
            <div id="lg-division-container" class="hidden lg:block w-3/5 max-w-96 pt-4 ps-2">
                {{--dynamicly render the division menu--}}
            </div>


            {{--list staff--}}
            <div class="container mx-auto p-4 lg:py-4 lg:px-0 ">
                {{--menu subdivisi dekstop--}}
                <div class="hidden lg:block lg:w-full lg:mb-4">
                    <div id="lg-subdivision-container"
                         class="w-full mx-auto flex justify-start items-center mb-8">
                        {{--dynamic rendering for subdivision menu uf exist--}}
                    </div>
                    <div id="subdivision-banner"
                         class="w-full mx-auto flex justify-center items-center py-2 bg-primary font-semibold tracking-wide text-base text-white">
                        {{--dynamic renderin--}}
                    </div>
                </div>

                {{--grid staff--}}
                <div id="staff-container" class="w-full grid grid-cols-1 lg:grid-cols-2 lg:gap-4">
                    {{--render staff list--}}
                </div>
            </div>
        </div>
    </section>

    <script>
        //list divisi
        const availableDivision = @json($availableDivision);
        // list staff
        const staffList = @json($listStaff);
        // console.log(staffList[9]);
        let filteredStaffList = staffList.sort((a, b) => b.status - a.status);
        // let filteredStaffList = staffList.filter((staff) => staff.date_start.split(' ')[1] === '2025').sort((a, b) => b.status - a.status);
        // let filteredStaffList = staffList.filter(staff => staff.status && staff.date_start.split(' ')[1] === '2024');
        // let filteredStaffList = staffList.filter(staff => staff.date_start.split(' ')[1] === '2024').sort((a, b) => b.status - a.status);
        // console.log(filteredStaffList);

        // selector list staff
        const staffContainer = document.querySelector(`#staff-container`);

        // selector menu divisi desktop
        const divisionContainer = document.querySelector('#lg-division-container');

        // selector menu subdivisi desktop
        const subdivisionContainer = document.querySelector(`#lg-subdivision-container`);
        const subdivisionBanner = document.querySelector(`#subdivision-banner`);

        // selector divisi mobile
        const divisionDropdown = document.querySelector('#division-dropdown');
        const selectedDivision = document.querySelector('#selected-division');

        // selector subdivisi mobile
        const subdivisionMenu = document.querySelector(`#subdivision-menu`);
        const subdivisionButton = document.querySelector('#subdivision-button');
        const selectedSubdivision = document.querySelector('#selected-subdivision');
        const subdivisionDropdown = document.querySelector(`#subdivision-dropdown`);

        // desktop
        let previousSelectedKeyYears = 5; // 2024
        let previousSelectedKeyDivisionDesktop = 10; // webdev
        let previousSelectedKeySubdivisionDekstop = 1; // subdivisi pertama

        // value to apply filter
        let year_value = '';
        let division_value = '';
        let subdivision_value = '';


        function updateFilteredStaffList() {
            filteredStaffList = staffList.filter((staff) => {
            const matchRecord = staff.records.find((record) => {
                const matchYear = year_value ? record.year_start <= parseInt(year_value) && (!record.year_end || record.year_end >= parseInt(year_value)) : true;
                const matchDivision = division_value ? record.division === division_value : true;
                const matchSubdivision = subdivision_value ? record.subdivision === subdivision_value : true;

                return matchYear && matchDivision && matchSubdivision;
            });

            return matchRecord !== undefined; 
        });

            filteredStaffList = filteredStaffList.sort((a, b) => b.status - a.status);

            // Render ulang daftar staff
            handleRenderList();
        }
      

        function updateYearValue(key) {
            year_value = document.querySelector(`#year-${key}`).textContent.trim();
            updateFilteredStaffList();
            // trackChangingValueAccrossRenders();
        }

        function updateDivisionValue(key) {
            // division_value = document.querySelector(`#division-${key}`).textContent.trim();
            division_value = availableDivision[year_value][key]['division']
            updateFilteredStaffList();
            // trackChangingValueAccrossRenders();
        }

        function updateSubdivisionValue(key) {
            // subdivision_value = document.querySelector(`#subdivision-${key}`).textContent.trim();
            subdivision_value = availableDivision[year_value][previousSelectedKeyDivisionDesktop]['subdivision'][key];
            handleShowSubdivisionBanner();
            updateFilteredStaffList();
            // trackChangingValueAccrossRenders();
        }


        //render list staff
        function handleRenderList() {
            // Clear existing content
            staffContainer.innerHTML = "";

                // Loop through staffList and create staff cards dynamically
                filteredStaffList.forEach((staff) => {
                const bgDivision = getDivisionColor(staff.subdivision || staff.division);

                // Filter records based on the selected year
                const filteredRecord = staff.records.find(record => {
                const yearStart = parseInt(record.year_start);
                const yearEnd = record.year_end ? parseInt(record.year_end) : new Date().getFullYear();
                const matchYear = year_value >= yearStart && year_value <= yearEnd;
                const matchDivision = division_value ? record.division === division_value : true;
                return matchYear && matchDivision;
                });
                const division = filteredRecord ? filteredRecord.division : staff.division;
                const subdivision = filteredRecord ? filteredRecord.subdivision : staff.subdivision;
                const dateStart = filteredRecord ? filteredRecord.date_start : staff.date_start;
                const dateEnd = filteredRecord ? filteredRecord.date_end : staff.date_end;

                const currentDate = new Date();
                const isAlumni = filteredRecord
                    ? new Date(dateEnd) < currentDate
                    : !staff.status;

                const statusText = isAlumni ? "Alumni" : "Aktif";
                const bgColorStatus = isAlumni ? 'bg-[#F7B23B]' : 'bg-[#04CA00]';

                // cardContainer
                const cardContainer = document.createElement('div');
                cardContainer.classList.add('staffCardContainer', 'group');

                // card
                const card = document.createElement('div');
                card.classList.add('staffCard');
                card.id = `card-${staff.id}`;


                // texture BOTH FRONT AND BACK
                const textureBack = document.createElement('img'); // element
                textureBack.src = '/assets/images/landing/keluarga-berbinar/texture-card.png';
                textureBack.alt = 'texture';
                textureBack.id = 'back-texture'
                textureBack.classList.add('texture');

                const textureFront = document.createElement('img');
                textureFront.src = '/assets/images/landing/keluarga-berbinar/texture-card.png';
                textureFront.alt = 'texture';
                textureFront.id = 'front-texture'
                textureFront.classList.add('texture');


                //front-card START
                const frontCard = document.createElement('div');
                // frontCard.classList.add('frontCard');
                frontCard.classList.add('relative', 'h-40', 'cursor-pointer', 'rounded-lg', 'bg-gradient-to-b', 'from-[#3986A3]', 'to-[#15323D]', 'px-4', 'pb-3', 'pt-2', 'hover:shadow-lg', 'md:h-48', 'lg:pointer-events-none', 'lg:h-60', 'lg:w-full', 'lg:cursor-default', 'lg:p-4');
                frontCard.id = `front-${staff.id}`
                frontCard.addEventListener('click', () => {
                    handleFlip(staff.id)
                });


                //adding-front-content 1
                frontCard.appendChild(textureFront);

                // status mobile and lg
                const statusMobile = document.createElement('span'); // element
                statusMobile.classList.add('statusMobile', bgColorStatus, 'group-odd:right-2', 'group-even:left-2');
                statusMobile.textContent = statusText;

                const statusDesktop = document.createElement('span'); // element
                statusDesktop.classList.add('statusDesktop', bgColorStatus);
                statusDesktop.textContent = statusText;

                //adding-front-content 2
                frontCard.appendChild(statusMobile);
                frontCard.appendChild(statusDesktop);

                //lini masa button
                const liniMasaBtn = document.createElement('button'); // element
                liniMasaBtn.classList.add('liniMasaBtn');

                const liniMasaImg = document.createElement('img');
                liniMasaImg.src = '/assets/images/landing/keluarga-berbinar/lini-masa.png';
                liniMasaImg.classList.add('mx-auto', 'size-5');
                const liniMasaSpan = document.createElement('span');
                liniMasaSpan.classList.add('text-center', 'text-xs', 'font-semibold', 'text-white');
                liniMasaSpan.textContent = 'Lini masa';

                liniMasaBtn.innerHTML = '';
                liniMasaBtn.appendChild(liniMasaImg);
                liniMasaBtn.appendChild(liniMasaSpan);

                // adding-front-content 3
                frontCard.appendChild(liniMasaBtn);

                // content front
                const contentFront = document.createElement('div'); // element
                contentFront.classList.add('contentFront');

                // image sm-md
                const contentImageSm = `
                <div class="relative h-full w-32 overflow-hidden group-even:order-last md:flex md:w-36 md:items-end lg:hidden">
                    <img src="${staff.photo}" loading="lazy"
                        alt="image-example" class="object-cover">
                    <span class="${bgDivision} absolute bottom-0 left-1/2 z-10 w-auto -translate-x-1/2 rounded-lg px-2 py-1 text-center text-xs font-semibold tracking-wide text-white shadow-lg">${subdivision ? subdivision : division}</span>
                 </div>
                `;

                // image lg
                const contentImageLg = `
                <div class="relative hidden h-full w-48 py-1 lg:block">
                    <img src="${staff.photo}" loading="lazy"
                        alt="image-example" class="h-full w-48 object-cover">
                    <span class="${bgDivision} absolute bottom-2 left-1/2 z-10 w-full -translate-x-1/2 rounded-lg px-2 py-1 text-center text-xs font-semibold tracking-wide text-white shadow-lg">${subdivision ? subdivision : division}</span>
                 </div>`

                // console.log(staff.photo);
                const infoSm = `
                <div class="h-full content-end space-y-2 py-1 lg:hidden">
                    <h3 class="text-start text-xl font-semibold text-white md:text-2xl">${staff.name}</h3>
                    <p class="block text-start text-sm font-thin text-white md:text-base">
                        As ${division}</p>
                    <p class="mb-2 block text-start text-sm font-thin text-white md:text-base"> ${staff.date_start}${staff.status ? '- Sekarang' : `- ${staff.records[staff.records.length - 1].date_end}`}</p>
               </div>`

                const infoLg = `
                <div class="hidden h-full content-start space-y-2 py-1 pt-8 lg:block">
                    <h3 class="text-2xl font-semibold text-white">${staff.name}</h3>
                    <p class="block text-base font-normal text-white">As
                        ${division}</p>
                    <p class="block text-base font-normal text-white">
                        ${dateStart}${isAlumni ? ` - ${dateEnd}` : '- Sekarang'}</p>
                    <a href="${staff.linkedin}" target="_blank" class="hidden w-auto xl:pointer-events-auto xl:inline-block xl:cursor-pointer">
                        <img src="/assets/images/landing/keluarga-berbinar/linkedin-fill.png" alt="linkedin" class="size-6"></a>
                </div>`

                const contentHTML = `
                ${contentImageSm}
                ${contentImageLg}
                ${infoSm}
                ${infoLg}`;

                const fragment = document.createRange().createContextualFragment(contentHTML);
                contentFront.appendChild(fragment);

                //adding-front-content 4
                frontCard.appendChild(contentFront);
                //front-card END


                //back-card START
                const backCard = document.createElement('div'); // element
                backCard.classList.add('relative', 'hidden', 'min-h-40', 'md:min-h-48', 'lg:min-h-60', 'rounded-lg',
                    'bg-gradient-to-b', 'from-[#3986A3]', 'to-[#15323D]', 'pt-2', 'pb-3', 'px-4', 'lg:p-4',
                    'cursor-pointer', 'hover:shadow-lg', 'my-rotate-y-180');
                backCard.id = `back-${staff.id}`
                backCard.addEventListener('click', () => {
                    handleFlip(staff.id)
                })

                //adding-back-content 1
                backCard.append(textureBack);

                //lini masa back
                const liniMasa = document.createElement('span'); // element
                liniMasa.classList.add('liniMasaBadge');
                liniMasa.textContent = 'Lini Masa';

                //adding-back-content 2
                backCard.appendChild(liniMasa);

                // linkedin
                const linkedInBtn = document.createElement('a'); // element
                linkedInBtn.href = staff.linkedin || '#';
                linkedInBtn.target = '_blank';
                linkedInBtn.classList.add('absolute', 'bottom-2', 'right-3', 'lg:hidden');

                const imgLinkedInBtn = document.createElement('img');
                imgLinkedInBtn.src = '/assets/images/landing/keluarga-berbinar/linkedin-fill.png'
                imgLinkedInBtn.alt = 'linkedin';
                imgLinkedInBtn.classList.add('size-6');

                linkedInBtn.appendChild(imgLinkedInBtn);

                //adding-back-content 3
                backCard.appendChild(linkedInBtn);


                const contentBack = document.createElement('div'); // element
                contentBack.classList.add('lg:relative', 'lg:z-20');

                const nameCardBack = document.createElement('h3');
                nameCardBack.classList.add('mb-4', 'w-3/4', 'text-xl', 'font-semibold', 'text-white');
                nameCardBack.textContent = staff.name;

                contentBack.appendChild(nameCardBack);

                const recordContainer = document.createElement('div');
                recordContainer.classList.add('grid', 'w-full', 'grid-cols-1', 'justify-items-start', 'lg:grid-cols-2');

                const records = staff.records;

                if (records) {
                    records.forEach((record, index) => {
                        const recordItemContainer = document.createElement('div');
                        recordItemContainer.classList.add('mb-2', 'last:mb-0');
                        recordItemContainer.id = `${staff.id}-record-${index}`

                        const role = document.createElement('h4');
                        role.classList.add('text-start', 'text-base', 'lg:text-lg', 'font-semibold', 'text-white');
                        role.textContent = `As ${record.subdivision || '-'} at ${record.division} `;

                        const timeLine = document.createElement('p');
                        timeLine.classList.add('text-base', 'font-thin', 'text-white');
                        timeLine.textContent = `${record.date_start} - ${record.date_end}`;

                        recordItemContainer.appendChild(role);
                        recordItemContainer.appendChild(timeLine);
                        recordContainer.appendChild(recordItemContainer)
                    })
                }

                contentBack.appendChild(recordContainer);

                // adding-back-content 4
                backCard.appendChild(contentBack)
                //back-card END


                card.appendChild(frontCard);
                card.appendChild(backCard);
                cardContainer.appendChild(card)
                staffContainer.appendChild(cardContainer)
            });
        }

        // ge bgcolor based on division or subdivision
        function getDivisionColor(subdivision) {
            switch (subdivision) {
                case 'UIUX Designer':
                    return 'bg-[#8F7158]';
                case 'Front End Developer':
                    return 'bg-[#718537]';
                case 'Back End Developer':
                    return 'bg-[#4EA596]';
                case 'Full Stack Developer':
                    return 'bg-[#008770]';
                default:
                    return 'bg-[#654064]';
            }
        }

        //debug function
        function trackChangingValueAccrossRenders() {
            console.log(`current value for filtering: YEAR: ${year_value} , DIVISION: ${division_value}, SUB-DIVISION: ${subdivision_value}`);
            console.log(`current key for rendering: YEAR: ${previousSelectedKeyYears}, DIVISION: ${previousSelectedKeyDivisionDesktop}, SUBDIVISION: ${previousSelectedKeySubdivisionDekstop}`)
        }

        //event handler untuk show banner subdivisi
        function handleShowSubdivisionBanner() {
            if (previousSelectedKeySubdivisionDekstop !== null) {
                subdivisionBanner.classList.remove('hidden');
                subdivisionBanner.textContent = subdivision_value;
            } else {
                subdivisionBanner.classList.add('hidden');
            }
        }

        //event handler untuk select subdivisi
        function handleSelectSubdividionDekstop(index) {
            if (previousSelectedKeySubdivisionDekstop === index) return;

            if (previousSelectedKeySubdivisionDekstop !== null) {
                const previousSelectedSubdivision = document.querySelector(`#subdivision-${previousSelectedKeySubdivisionDekstop}`);
                if (previousSelectedSubdivision) {
                    previousSelectedSubdivision.classList.remove('subdivision-active');
                }
            }

            // grab selected element and add selected style
            const selectedSubdivisionElement = document.querySelector(`#subdivision-${index}`);
            if (selectedSubdivisionElement) {
                selectedSubdivisionElement.classList.add('subdivision-active');
            }

            previousSelectedKeySubdivisionDekstop = index;
            updateSubdivisionValue(index);
        }

        //handle show subdivision menu if exist
       function handleShowSubdivisionDesktop() {
            if (previousSelectedKeyDivisionDesktop === null) {
                subdivisionContainer.classList.add('hidden');
                return;
            }

            const current_subdivisions = availableDivision[`${year_value}`][previousSelectedKeyDivisionDesktop]['subdivision'];
            if (current_subdivisions.length === 0) {
                subdivisionContainer.classList.add('hidden');
            } else {
                subdivisionContainer.classList.remove('hidden');
                subdivisionContainer.innerHTML = '';

                // Pastikan kontainer subdivisi menggunakan flexbox dengan wrapping
                subdivisionContainer.style.display = 'flex';
                subdivisionContainer.style.flexWrap = 'wrap';
                subdivisionContainer.style.gap = '0.7rem'; 


                current_subdivisions.forEach((subdivision, index) => {
                    const subdivisionElement = document.createElement('div');

                    subdivisionElement.classList.add('font-semibold', 'tracking-wide', 'text-nowrap', 'text-white',
                        'bg-primary', 'text-center', 'px-4', 'py-1', 'border-2', 'border-transparent', 'cursor-pointer');

                    subdivisionElement.textContent = subdivision;
                    subdivisionElement.id = `subdivision-${index}`;

                    subdivisionElement.addEventListener('click', () => {
                        handleSelectSubdividionDekstop(index);
                    });

                    subdivisionContainer.appendChild(subdivisionElement);
                });
            }
        }
        //event handler untuk select divisi
        function handleSelectDivisionDesktop(index) {
            // cek jika key previous selected sama dengan yang di select, kalau iya return
            if (previousSelectedKeyDivisionDesktop === index) return

            // flush previous selected subdivision and key
            subdivision_value = '';
            previousSelectedKeySubdivisionDekstop = null;
            handleShowSubdivisionBanner();

            // hapus styling untuk element yang diselect sebelumnya
            if (previousSelectedKeyDivisionDesktop !== null) {
                const prevSelectedDivision = document.querySelector(`#division-${previousSelectedKeyDivisionDesktop}`);
                if (prevSelectedDivision) {
                    prevSelectedDivision.classList.remove('division-active');
                }
            }

            //apply styling untuk selected division
            const selectedDivisionElement = document.querySelector(`#division-${index}`);
            if (selectedDivisionElement) {
                selectedDivisionElement.classList.add('division-active');
            }

            // set previous selected key dengan index terbaru
            previousSelectedKeyDivisionDesktop = index;
            updateDivisionValue(index);
            handleShowSubdivisionDesktop();
        }

        //event handler untuk menampilkan list divisi yang ada di tahun itu
        function handleShowDivisionDesktop() {
            handleShowSubdivisionDesktop();

            const current_divisions = availableDivision[year_value];

            divisionContainer.innerHTML = '';
            current_divisions.forEach((division, index) => {
                const divisionElement = document.createElement('div');

                divisionElement.classList.add(
                    'w-full', 'h-14', 'mx-auto', 'font-semibold', 'py-2', 'ps-4', 'text-sm',
                    'text-slate-900', 'text-start', 'bg-white', 'rounded-full', 'mb-4',
                    'flex', 'justify-start', 'items-center', 'cursor-pointer',
                );

                divisionElement.textContent = division['division'];
                divisionElement.id = `division-${index}`;

                divisionElement.addEventListener('click', () => {
                    handleSelectDivisionDesktop(index);
                });

                divisionContainer.appendChild(divisionElement);
            })
        }

        // event handler untuk select years
        function handleSelectYears(yearsId, key) {
            // if the same year just return
            if (key === previousSelectedKeyYears) return

            // flush for the division and subdivision
            division_value = '';
            previousSelectedKeyDivisionDesktop = null;
            subdivision_value = '';
            previousSelectedKeySubdivisionDekstop = null;

            handleShowSubdivisionBanner();
            // (mobile) when dropdown was open close it when the user change the year
            if (!divisionDropdown.classList.contains('hidden')) {
                divisionDropdown.classList.add('hidden');
            }
            selectedDivision.textContent = 'select division';

            subdivisionMenu.classList.add('hidden');
            // (mobile) when dropdown subdivision open, close it when the user change the year
            if (!subdivisionDropdown.classList.contains('hidden')) {
                subdivisionDropdown.classList.add('hidden');
                subdivisionButton.classList.remove('text-white');
                subdivisionButton.classList.remove('bg-gradient-to-r');
                subdivisionButton.classList.remove('from-[#74AABF]');
                subdivisionButton.classList.remove('to-[#15323D]');
            }


            // check selectedYear sudah ada atau belum, kalau ada hilangkan style selected
            if (previousSelectedKeyYears !== null) {
                const prevYear = document.querySelector(`#year-${previousSelectedKeyYears}`);
                if (prevYear) {
                    prevYear.classList.remove('year-active');
                }
            }

            const currentYearElement = document.querySelector(`#${yearsId}`);
            if (currentYearElement) {
                currentYearElement.classList.add('year-active');
            }

            previousSelectedKeyYears = key;
            updateYearValue(key);
            previousSelectedKeyDivisionDesktop = null;

            subdivisionContainer.innerHTML = ''; 
            subdivisionContainer.classList.add('hidden'); 

            handleShowDivisionDesktop();
        }

        function handleShowDivisionMobile() {
            const current_division = availableDivision[year_value];

            // select the container and empty
            divisionDropdown.innerHTML = '';
            current_division.forEach((division, index) => {
                const divisionElement = document.createElement('div');
                divisionElement.classList.add('division-item', 'w-full', 'mx-auto',
                    'px-4', 'py-4',
                    'font-normal',
                    'bg-transparent',
                    'text-base',
                    'text-[#F7B23B]',
                    'text-center',
                    'h-14',
                    'mb-4',
                    'flex',
                    'items-center',
                    'justify-center',
                    'rounded-md',
                    'border-2',
                    'border-[#916823]',
                    'cursor-pointer',
                );
                if (index === previousSelectedKeyDivisionDesktop) {
                    divisionElement.classList.add('hidden');
                }

                divisionElement.textContent = division['division'];
                divisionElement.id = `division-mobile-${index}`;


                // todo: add even handler handleSelectDivision
                divisionElement.addEventListener('click', () => {
                    handleSelectDivisionMobile(index);
                })

                divisionDropdown.appendChild(divisionElement);

            })
        }

        function handleSelectDivisionMobile(index) {
            if (previousSelectedKeyDivisionDesktop === index) return;
            selectedSubdivision.textContent = 'Select Subdivision'

            subdivision_value = '';
            previousSelectedKeySubdivisionDekstop = null;

            // Update the button with the selected division
            selectedDivision.textContent = document.querySelector(`#division-mobile-${index}`).textContent.trim();

            // Show the previously selected division (if any)
            if (previousSelectedKeyDivisionDesktop !== null) {
                const previousSelectedDivisionDropdown = document.querySelector(`#division-mobile-${previousSelectedKeyDivisionDesktop}`);
                if (previousSelectedDivisionDropdown) {
                    previousSelectedDivisionDropdown.classList.remove('hidden');
                }
            }

            // Hide the currently selected division in the dropdown
            const selectedDivisionDropdown = document.querySelector(`#division-mobile-${index}`);
            if (selectedDivisionDropdown) {
                console.log('selected division dropdown exist!!!');
                selectedDivisionDropdown.classList.add('hidden');
            }

            // Update the previous selected key
            previousSelectedKeyDivisionDesktop = index;
            updateDivisionValue(index);

            // Hide the dropdown menu
            handleToggleDropdownDivisionMobile();

            // todo: how sub-division if exist
            handleShowSubdivisionMenuMobile();
        }

        function handleToggleDropdownDivisionMobile() {
            handleShowDivisionMobile();
            if (divisionDropdown.classList.contains('hidden')) {
                divisionDropdown.classList.remove('hidden')
            } else {
                divisionDropdown.classList.add('hidden');
            }
        }

        function handleShowSubdivisionMenuMobile() {
            // const current_subdivisions = availableDivision[];
            const current_subdivisions = availableDivision[`${year_value}`][previousSelectedKeyDivisionDesktop]['subdivision'];
            if (current_subdivisions.length > 0) {
                // Populate the subdivision dropdown dynamically
                subdivisionDropdown.innerHTML = ''; // Clear previous subdivisions
                current_subdivisions.forEach((subdivision, index) => {
                    const subdivisionDiv = document.createElement('div');
                    subdivisionDiv.classList.add(
                        'w-3/4',
                        'mx-auto',
                        'px-4',
                        'py-4',
                        'font-normal',
                        'bg-transparent',
                        'text-base',
                        'text-[#15323D]',
                        'text-center',
                        'h-14',
                        'mb-4',
                        'flex',
                        'items-center',
                        'justify-center',
                        'rounded-md',
                        'border-2',
                        'border-[#15323D]',
                        'cursor-pointer'
                    );
                    if (previousSelectedKeySubdivisionDekstop === index) {
                        subdivisionDiv.classList.add('hidden');
                    }
                    subdivisionDiv.textContent = subdivision;
                    subdivisionDiv.id = `subdivision-mobile-${index}`;

                    subdivisionDiv.addEventListener('click', () => {
                        handleSelectSubdivisionMobile(index);
                    });

                    subdivisionDropdown.appendChild(subdivisionDiv);
                });

                // Show the subdivision menu
                subdivisionMenu.classList.remove('hidden');
            } else {
                console.log('No subdivisions available for this division.');
                subdivisionMenu.classList.add('hidden');
            }
        }

        function handleSelectSubdivisionMobile(index) {
            if (previousSelectedKeyDivisionDesktop === index) return;

            // Update the button with the selected subdivision
            selectedSubdivision.textContent = document.querySelector(`#subdivision-mobile-${index}`).textContent.trim();

            // Unhide the previously selected subdivision, if any
            if (previousSelectedKeySubdivisionDekstop !== null) {
                const previousSelectedSubdivisionElement = document.querySelector(`#subdivision-mobile-${previousSelectedKeySubdivisionDekstop}`);
                if (previousSelectedSubdivisionElement) {
                    previousSelectedSubdivisionElement.classList.remove('hidden');
                }
            }

            // Hide the currently selected subdivision
            const selectedDiv = document.querySelector(`#subdivision-mobile-${index}`);
            if (selectedDiv) {
                selectedDiv.classList.add('hidden');
            }

            // Update the previous selected key
            previousSelectedKeySubdivisionDekstop = index;
            updateSubdivisionValue(index);

            // Hide the subdivision dropdown
            handleToggleDropdownSubdivisionMobile();
        }

        function handleToggleDropdownSubdivisionMobile() {
            // subdivisionDropdown.classList.toggle('hidden');
            if (subdivisionDropdown.classList.contains('hidden')) {
                subdivisionDropdown.classList.remove('hidden');
                subdivisionButton.classList.add('text-white');
                subdivisionButton.classList.add('bg-gradient-to-r');
                subdivisionButton.classList.add('from-[#74AABF]');
                subdivisionButton.classList.add('to-[#15323D]');
            } else {
                subdivisionDropdown.classList.add('hidden');
                subdivisionButton.classList.remove('text-white');
                subdivisionButton.classList.remove('bg-gradient-to-r');
                subdivisionButton.classList.remove('from-[#74AABF]');
                subdivisionButton.classList.remove('to-[#15323D]');
            }

        }

        // EVENT ONLOAD
        document.addEventListener("DOMContentLoaded", function () {
            const defaultYearElement = document.querySelector(`#year-${previousSelectedKeyYears}`);
            if (defaultYearElement) {
                defaultYearElement.classList.add('year-active');
                updateYearValue(previousSelectedKeyYears)
            }
            handleShowDivisionDesktop();
            const defaultDivision = document.querySelector(`#division-${previousSelectedKeyDivisionDesktop}`);
            if (defaultDivision) {
                defaultDivision.classList.add('division-active');
                updateDivisionValue(previousSelectedKeyDivisionDesktop)
            }

            handleShowSubdivisionDesktop();
            const defaultSubdivision = document.querySelector(`#subdivision-${previousSelectedKeySubdivisionDekstop}`)
            if (defaultSubdivision) {
                defaultSubdivision.classList.add('subdivision-active');
                updateSubdivisionValue(previousSelectedKeySubdivisionDekstop);
            }

            // load the default data to the selected dropdown
            // division mobile
            selectedDivision.textContent = division_value;
            handleShowSubdivisionMenuMobile()
            selectedSubdivision.textContent = subdivision_value;

            updateFilteredStaffList();

        })

        function handleFlip(id) {
            const card = document.getElementById(`card-${id}`);
            const back = document.getElementById(`back-${id}`);
            const front = document.getElementById(`front-${id}`);

            if (!card || !front || !back) {
                console.error(`Elements for card ${id} not found`);
                return;
            }

            card.classList.toggle("my-rotate-y-180");

            if (card.classList.contains("my-rotate-y-180")) {
                setTimeout(() => {
                    front.classList.add("hidden");
                    back.classList.remove("hidden");
                }, 300);
            } else {
                setTimeout(() => {
                    back.classList.add("hidden");
                    front.classList.remove("hidden");
                }, 300);
            }
        }


    </script>

@endsection
