<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    //
protected $guarded = ['id', 'created_at', 'updated_at'];
+
+
+    public function images()
+    {
+        return $this->hasMany('App\Image');
+		// return $this->hasMany('App\Models\MediaUse', 'resort_id');
+
+    }
+   
}
