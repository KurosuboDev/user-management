<!-- resources/views/livewire/customer-setup-wizard.blade.php -->
<div>
    @if ($step === 1)
        <h2>Branch Details</h2>
        <!-- Branch form here -->
        <button wire:click="nextStep">Next</button>
    @elseif ($step === 2)
        <h2>Operating Hours</h2>
        <!-- Hours form here -->
        <button wire:click="prevStep">Back</button>
        <button wire:click="nextStep">Next</button>
    @elseif ($step === 3)
        <h2>Categories</h2>
        <!-- Categories form here -->
        <button wire:click="prevStep">Back</button>
        <button wire:click="nextStep">Next</button>
    @endif
</div>
