<?php

namespace Christophrumpel\MissingLivewireAssertions;

use Livewire\Component;

class LivewireTestComponentA extends Component
{
    public function render()
    {
        return view('missing_livewire_assertions::livewire-test-component-a');
    }
}