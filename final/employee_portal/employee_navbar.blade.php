
<div class="vertical-nav bg-white" id="sidebar">
    <nav class="nav flex-row mb-0">
        <x-nav-link :href="route('grh.employee_portal.index')" :active="request()->routeIs('grh.employee_portal.index')">
            {{ __('Dashboard') }}
        </x-nav-link>
       
        <x-nav-link :href="route('leaves.new')" :active="request()->routeIs('leaves.new')">
            {{ __('Demandes Congé') }}
        </x-nav-link>
        <x-nav-link :href="route('grh.employee_portal.clocking')" :active="request()->routeIs('grh.employee_portal.clocking')">
            {{ __('Pointages') }}
        </x-nav-link>
          
    </nav>
</div>
