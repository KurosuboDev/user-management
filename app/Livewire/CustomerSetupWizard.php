<?php

// app/Http/Livewire/CustomerSetupWizard.php
namespace App\Http\Livewire;

use Livewire\Component;

class CustomerSetupWizard extends Component
{
    public $step = 1;
    public $customerData = [
        'branch' => [],
        'hours' => [],
        'categories' => [],
        'services' => [],
        'resources' => [],
        'colors' => [],
    ];

    public function nextStep()
    {
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function save()
    {
        // Save logic here (e.g., save to DB)
        // Send email notifications if needed
    }

    public function render()
    {
        return view('livewire.customer-setup-wizard');
    }
}
