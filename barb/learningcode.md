some learning code

#### Trying to Add a picture and create a public folder on the controllers

 if ($request->hasfile('main_img')) {
         $file = $request->file('main_img');
         $extension = $file->getClientOriginalExtension();
         $filename = $time() . $extension;
         $file->move('uploads/homeimg/' . $filename);
         $homeimg->main_img = $filename;            
         } else {
            return $request;
            $homeimg->main_img = '';
         }
        
        $homeimg->save();

#### Code foreign keys in order to display information from eprograms to the tables

 public function Eprogram()
     {
         return $this->belongsTo(Eprogram::class, 'eprogram_id');
     }

return $playcredits->eprogram();


$flights = Flight::where('destination', 'Paris')->get();

$query->isEmpty()

