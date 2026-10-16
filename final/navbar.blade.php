
<div class="vertical-nav bg-white" id="sidebar">
    <nav class="nav flex-row mb-0">
        <x-nav-link :href="route('grh.dashboard')" :active="request()->routeIs('grh.dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link :href="route('employees.index')" :active="request()->routeIs('employees.index')">
            {{ __('Liste des Salariés') }}
        </x-nav-link>
        <x-nav-link :href="route('clockings.index')" :active="request()->routeIs('clockings.index')">
            {{ __('Controle Présence') }}
        </x-nav-link>
        <x-nav-link :href="route('leaves.index')" :active="request()->routeIs('leaves.index')">
            {{ __('Controle Congé') }}
        </x-nav-link>
        <x-nav-link :href="route('credits.index')" :active="request()->routeIs('credits.index')">
            {{ __('Avance/Credit') }}
        </x-nav-link>        
        <x-nav-link :href="route('payslips.index')" :active="request()->routeIs('payslips.index')">
            {{ __('Fiche Des Paies') }}
        </x-nav-link>
          
    </nav>
</div>
