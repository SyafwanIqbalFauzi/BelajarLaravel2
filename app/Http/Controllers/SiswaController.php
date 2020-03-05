

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $data['siswa'] = DB::table('employees')->get();
        return view('belajar', $data);
    }
}
