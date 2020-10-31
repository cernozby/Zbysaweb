<?php
// source: C:\xampp\htdocs\Zbysaweb\app/templates/Homepage/custom.latte

use Latte\Runtime as LR;

final class Template75c5a53ea1 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	public function blockContent(array $_args): void
	{
?><div class="d-flex justify-content-center">
    <div id="mapa" style=" width: 100%; height: 400px" ></div>
</div>

<script>
    var center = SMap.Coords.fromWGS84(16.6135014, 49.9148267);
    var m = new SMap(JAK.gel("mapa"), center, 10);
    m.addDefaultLayer(SMap.DEF_BASE).enable();
    m.addDefaultControls();

    var layer = new SMap.Layer.Marker();
    m.addLayer(layer);
    layer.enable();

    var card = new SMap.Card();
    card.getHeader().innerHTML = "<strong>Boulder Forem</strong>";
    card.getBody().innerHTML = "Závody bozala.cz <em> 21.1.2020</em>!";

    var options_forea = {
        title: "Forea"
    };

    var forea = SMap.Coords.fromWGS84(16.6135014, 49.9148267);
    var marker = new SMap.Marker(forea, "myMarker", options_forea);
    marker.decorate(SMap.Marker.Feature.Card, card);
    layer.addMarker(marker);

    var usti = SMap.Coords.fromWGS84(16.4423389, 49.9046494);
    var markerUsti = new SMap.Marker(usti, "myMarker", options_forea);
    markerUsti.decorate(SMap.Marker.Feature.Card, card);
    layer.addMarker(markerUsti);
</script><?php
	}

}
