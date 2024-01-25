<?php

namespace App\Traits;

trait HasStatus
{

    public function getActiveAttribute(){

      if($this->status == 1){
        return '<div class="flex items-center justify-center text-success">
        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>' . __('admin.active') .'</div>';

      }else{

        return '<div class="flex items-center justify-center text-danger">
        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i>' . __('admin.inactive') .'</div>';
      }
    }


    public function toggleStatus(){

        $this->status = !$this->status;

        $this->save();
    }
}
