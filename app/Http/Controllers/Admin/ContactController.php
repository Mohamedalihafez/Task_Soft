<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::user()->isSuperAdmin())
            return view('admin.pages.contact.index',[
                'contacts' => Contact::filter($request->all())->paginate(10),
                
            ]);
        else 
            abort(404);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upsert(Contact $contact)
    {
        if(Auth::user()->isSuperAdmin())
            return view('admin.pages.contact.upsert',[
                'contact' => $contact,
                'categories'=>Category::get(),
                'users' => User::where('role_id',SUPERADMIN)->get(),
            ]);
        else 
            abort(404);
    }



    public function modify(ContactRequest $request)
    {
        return Contact::upsertInstance($request);
    }

    public function destroy(Contact $contact)
    {
        return $contact->deleteInstance();
    }

    public function filter(Request $request)
    {
        return view('admin.pages.contact.index',[
            'contacts' => Contact::filter($request->all())->paginate(10)
        ]);
    }
}
