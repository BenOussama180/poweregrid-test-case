import "./bootstrap";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;
import "./../../vendor/power-components/livewire-powergrid/dist/powergrid";

Alpine.plugin(focus);

Alpine.start();
