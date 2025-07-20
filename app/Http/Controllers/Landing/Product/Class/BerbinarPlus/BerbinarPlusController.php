<?php

namespace App\Http\Controllers\Landing\Product\Class\BerbinarPlus;

use App\Http\Controllers\Berbinarplus\EnrollmentController;
use App\Http\Controllers\Controller;
use App\Models\Berbinarp_user;
use App\Models\Berbinarp_enrollments;
use App\Models\Berbinarp_class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class BerbinarPlusController extends Controller
{
    public function index()
    {
        $products = [
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-class-journey.png',
                'produk' => '101 Class Journey',
                'deskripsi' => 'Memperluas wawasan keilmuan dan keterampilan yang berasal dari ahli',
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-bisikan.png',
                'produk' => 'BISIKAN',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-berbinar.png',
                'produk' => 'Berbinar+',
                'deskripsi' => 'Bundling package dimana customer bisa menggunakan produk kelas, konseling, dan psikotes.',
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-bisikan.png',
                'produk' => 'Berarty',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
            ],
            [
                'vector' => 'assets/images/landing/asset-kelas/produk/vector-bisikan.png',
                'produk' => 'Premium Class',
                'deskripsi' => 'Sharing session terkait psikologi lewat instagram Berbinar dan tersedia juga di youtube channel',
            ],
        ];

        $faqs = [
            [
                'question' => 'Apakah saya boleh mengikuti lebih dari satu kelas?',
                'answer' => 'Ya, SobatBinar diperbolehkan mengikuti lebih dari satu kelas sesuai dengan minat dan bidang yang ingin dipelajari.'
            ],
            [
                'question' => 'Bagaimana cara saya bisa upgrade layanan konseling dan psikotest?',
                'answer' => 'SobatBinar dapat berkomunikasi dengan narahubung untuk proses upgrade layanan.  Setelah itu, akan ada arahan dan informasi lebih lanjut.'
            ],
            [
                'question' => 'Bisakah saya menjadwalkan ulang sesi konseling sesi kelas ketika saya berhalangan hadir di kelas Berbinar+?',
                'answer' => 'Di kelas Berbinar+, SobatBinar akan belajar melalui video pembelajaran yang bisa diakses kapan saja. Namun jika SobatBinar memilih paket bundling dengan konseling, SobatBinar juga bisa menjadwalkan sesi konseling langsung dengan konselor sesuai waktu yang tepat.'
            ],
            [
                'question' => 'Apakah saya dapat memilih psikolog dan peer konselor yang saya inginkan di layanan konseling?',
                'answer' => 'Ya, SobatBinar punya kebebasan untuk memilih sendiri psikolog atau peer konselor yang ingin mereka ajak berdiskusi, sesuai  dengan yang tersedia.'
            ],
            [
                'question' => 'Apakah hasil psikotes dan konseling bersifat rahasia?',
                'answer' => 'Tentu. Semua data dan hasil dari layanan konseling maupun psikotest dijamin kerahasiaannya sesuai dengan kode etik profesi dan kebijakan privasi Berbinar+.'
            ]
        ];

        $psikologs = [
            [
                'name' => 'Erwin Tri Susanto, S.Psi, MBA',
                'field' => 'Human Resources',
                'title' => 'Career Preparation',
                'image' => 'assets/images/landing/asset-kelas/berbinar-plus/pemateri/erwin.png'
            ],
            [
                'name' => 'Sefty Wulandari',
                'field' => 'Social Media Specialist',
                'title' => 'Pemasaran Influencer dan Kemitraan',
                'image' => 'assets/images/landing/asset-kelas/berbinar-plus/pemateri/sefty.png'
            ],
            [
                'name' => 'Dini Amelia Sari',
                'field' => 'Digital Marketing',
                'title' => 'Digital Marketing Essentials',
                'image' => 'assets/images/landing/asset-kelas/berbinar-plus/pemateri/dini.png'
            ],
            [
                'name' => 'Indriana Luqul Jannah',
                'field' => 'Digital Marketing',
                'title' => 'SEO Basics',
                'image' => 'assets/images/landing/asset-kelas/berbinar-plus/pemateri/indriana.png'
            ],
            [
                'name' => 'Shafa Nathaniela Salwa',
                'field' => 'Product management',
                'title' => '-',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/virginia.png'
            ],
            [
                'name' => 'Hakiki Mahfuzh',
                'field' => 'Product management',
                'title' => '-',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/kasmayani.png'
            ],
            [
                'name' => 'Abdillah Farhan',
                'field' => 'Digital Marketing',
                'title' => '-',
                'image' => 'assets/images/landing/asset-konseling/image/psikolog/ira.png'
            ]
        ];

        $layanan_berbinar_plus = [
            'insight' => [
                'name' => 'Insight',
                'price' => 'Rp15.000',
                'services' => [
                    'Layanan video pembelajaran daring dan personal mentoring',
                ]
            ],
            'A+' => [
                'name' => 'A+',
                'price' => [
                    'online' => [
                        'weekday' => 'Rp36.000 - Rp120.000/jam',
                        'weekend' => 'Rp44.000 - Rp140.000/jam'
                    ],
                    'offline' => [
                        'weekday' => 'Rp44.000 - Rp140.000/jam',
                        'weekend' => 'Rp44.000 - Rp180.000/jam'
                    ]
                ],
                'services' => [
                    'Dengan layanan konseling dengan psikolog dan peer counselor',
                ]
            ],
            'complete' => [
                'name' => 'Complete',
                'price' => 'Rp100.000 - Rp280.000',
                'services' => [
                    'Dengan layanan psikotes dan konseling serta laporan tertulis',
                ]
            ]
        ];

        $benefit_berbinar_plus = [
            [
                'name' => 'E-Certificate',
                'image' => 'certificate.png'
            ],
            [
                'name' => 'Hands-On Experience',
                'image' => 'hands-on.png'
            ],
            [
                'name' => 'Upgrade Skill',
                'image' => 'upgrade.png'
            ],
        ];

        return view('landing.product.class.berbinar-plus.index', compact('faqs', 'products', 'psikologs', 'layanan_berbinar_plus', 'benefit_berbinar_plus'));
    }

    // SHOWING REGISTRATION PAGE
    public function registration()
    {
        $kelas = Berbinarp_class::all();
        return view('landing.product.class.berbinar-plus.registration', compact('kelas'));
    }

    private function getClassIdByTitle($title)
    {
        $class = Berbinarp_class::where('title', $title)->first();
        return $class ? $class->id : null;
    }

    public function success()
    {
        return view('landing.product.class.berbinar-plus.success');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'age' => 'required|integer',
            'wa_number' => 'required',
            'last_education' => 'required',
            'kelas' => 'required', 
            'paket-layanan' => 'required',
            'bukti_transfer' => 'required',
            'knowing_source' => 'required',
        ]);

        try {
            $user = Berbinarp_user::create([
                'email' => $request->email,
                'password' => Hash::make('abcdefgh123'),
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'gender' => $request->gender,
                'age' => $request->age,
                'wa_number' => $request->wa_number,
                'last_education' => $request->last_education,
                'knowing_source' => $request->knowing_source,
            ]);

            $buktiPath = null;
            if ($request->hasFile('bukti_transfer')) {
                $buktiPath = $request->file('bukti_transfer')->store('bukti_transfer', 'public');
            }

            $enrollmentDate = now()->toDateString();
            $expiredDate = now()->addDays(30)->toDateString();

            Berbinarp_enrollments::create([
                'user_id' => $user->id,
                'class_id' => $request->kelas, // langsung ID dari select
                'class_progress' => 1, // atau sesuai kebutuhan
                'service_package' => $request->input('paket-layanan'),
                'transfer_evidance' => $buktiPath,
                'enrollment_date' => $enrollmentDate,
                'expired_date' => $expiredDate,
                'completed_date' => null,
            ]);
            

            Alert::toast('Formulir Pendaftaran Berhasil', 'success')->autoClose(5000);
            return response()->json(['redirect' => route('product.class.berbinar-plus.success')]);
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage(), 'error')->autoClose(5000);
            return redirect()->back();
        }
    }
}
