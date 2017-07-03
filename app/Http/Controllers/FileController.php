<?php namespace App\Http\Controllers;
 
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
 
//use Request;
use Illuminate\Http\Request;
 
class FileController extends BaseController
{
    public function saveFile(Request $request)
    {

        try {
            $file = $request->file('file');  
            $extension = $file->getClientOriginalExtension();

            Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
            $arquivo = new \App\Attach;

            $arquivo->name = $file->getFilename();
            $arquivo->mime = $file->getClientMimeType();
            $arquivo->original_filename = $file->getClientOriginalName();
            $arquivo->filename = $file->getFilename().'.'.$extension;
            $arquivo->entity = $request->input('entidade');
            $arquivo->entity_id = $request->input('id');
            $arquivo->user_id = $request->input('user_id');

            $arquivo->save();
           

        } catch (Exception $e) {
            return response()->json(json_encode($e));
        }
   
        return response()->json('success');
    }
 
    public function deleteFile($name)
    {
        Storage::delete($name);
        return response()->json('success');
    }
 
    public function getFileList(){
 
        $files = Storage::files('/');
        return response()->json($files);
 
 
    }

     public function getFile(Request $request){
 

        $files = Storage::files('/');
        return response()->json($files);
 
 
    }

    public function getFileListForEntity($id,$entidade){
    
        $arquivos = \App\Attach::where('entity_id', $id)->get();
        //print_r($arquivos);

        return response()->json($arquivos);
 
 
    }
 
    public function viewFile($name){

       /* return response()->make(Storage::get('../storage/app/'.$name.".jpg"), 200, [
            'Content-Type' => Storage::mimeType($name),
            'Content-Disposition' => 'inline; '.$name,
        ]);*/
 
        //$file = file_get_contents('../storage/app/'.$name.".jpg");
       // echo $file;
        $arquivos = \App\Attach::find($name);

        $file = '../storage/app/'.$arquivos->filename;

        header('Content-Type: '.$arquivos->mime);
        header('Content-Length: ' . filesize($file));
        echo file_get_contents($file);
    }
 
}
 