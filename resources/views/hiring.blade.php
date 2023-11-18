<main className='flex flex-col gap-12 bg-white px-10 py-16'>
    <nav className="flex items-center justify-between mb-1 border-[#d5d5d5] border-b pb-5">
        <a className='' href='/' title='Berbinar Logo'>
            <img alt='Berbinar Logo' src='/logo.png' width={0} height={0} className='w-14 mb' />
        </a>

        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="15" viewBox="0 0 40 256" fill="none">
            <path d="M24.9403 24H360.94M24.9403 128H360.94M24.9403 232H360.94" stroke="#7c7c7c" stroke-width="48" stroke-miterlimit="10" stroke-linecap="round"/>
        </svg>
    </nav>

    <section className='flex flex-col gap-3'>
        <h1 className='font-medium text-black text-xl relative leading-[200%]'>Cari dan asah <span className='font-bold text-[45px] relative'>Potensimu <Image alt='Berbinar Hiring Alt' width={0} height={0} className='absolute w-[100px] -top-6 -right-6' src='/logo-hiring.png'  /></span> di Berbinar</h1>
        <p className="text-sm text-[#272727]">
        Berbinar Insightful Indonesia sekarang melakukan hiring terhadap beberapa posisi dan divisi yang ada. Temukan pengalaman dan asah kemampuan mu dalam program internship ini serta dapatkan manfaat yang didapatkan dari program ini.
        </p>
        <div className="flex items-center gap-2 text-[#3986A3] text-sm">
            <a href="" className='pb-2 border-b border-[#3986A3]'>Lihat Posisi Tersedia</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" fill="none">
                <path d="M8.37594 22.1699L6.69357 20.4875L18.2298 8.9513H7.89526V6.54791H22.3156V20.9682H19.9122V10.6337L8.37594 22.1699Z" fill="#3986A3"/>
            </svg>
        </div>
    </section>

    <section className='flex flex-col gap-3'>
        <div className="flex flex-col gap-1">
            <h1 className='font-medium text-black text-xl'>Wellness and benefit</h1>
            <p className='text-sm text-[#7C7C7C]'>As part of our pursuit to lead impactful, fulfilling lives, we take benefits pretty seriously.</p>
        </div>
        
        <div className="flex flex-col gap-5 mt-3">
                    <div className="flex flex-col w-full items-center justify-between pb-3 border-b border-black hover:cursor-pointer hover:border-[#7c7c7c] gap-4" onClick={() => selectedTab(!selected, index)}>
                        <div className='flex w-full items-center justify-between'>
                            <p className='text-black text-sm'>{content.question}</p>
                            {
                                selected && indexSelected == index ? <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <path d="M22.0478 7.97654L12.3198 17.7045L2.5918 7.97654L4.31851 6.24982L12.3198 14.2511L20.3211 6.24982L22.0478 7.97654Z" fill="black"/>
                            </svg> : <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <path d="M2.59163 15.8206L12.3196 6.09265L22.0476 15.8206L20.3209 17.5474L12.3196 9.54609L4.31835 17.5474L2.59163 15.8206Z" fill="black"/>
                            </svg>
                            }
                        </div>
                    </div>
        </div>
    </section>

    <section className='flex flex-col gap-3'>
        <div className="flex flex-col gap-1">
            <h1 className='font-medium text-black text-xl'>Hiring process</h1>
            <p className='text-sm text-[#7C7C7C]'>As part of our pursuit to lead impactful, fulfilling lives, we take benefits pretty seriously.</p>
        </div>
    </section>

    <section className='flex flex-col gap-3'>
        <div className="flex flex-col gap-1">
            <h1 className='font-medium text-black text-xl'>Open roles</h1>
        </div>
    </section>
</main>