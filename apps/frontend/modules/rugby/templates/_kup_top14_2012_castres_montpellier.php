<div class="regle">
    <div style="margin-left: 10px; margin-top: 20px; width: 670px;">
    <?php $rules1 = array('type' => '','title' => 'Sur ce match','nbSubSection' => '7',
        Array('orange' => '','legende' => '1N2','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '5'),
        Array('orange' => '','legende' => 'Combien d\'essais l\'équipe de Montpellier inscrira-t-elle ?','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '10'),
        Array('orange' => '','legende' => 'Combien d\'essais l\'équipe de Castres inscrira-t-elle ?','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '10'),
        Array('orange' => '','legende' => 'Équipe première marqueuse d\'essai ?','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '10'),
        Array('orange' => '','legende' => 'Nombre total de drops réussis pendant le match ?','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '15'),
        Array('orange' => '','legende' => 'Nombre total de pénalités réussis pendant le match ?','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '15'),
		Array('orange' => '','legende' => 'Déterminer l\'écart de points entre les deux équipes à la fin du match','image' => '/images/kup/view/regle/tabFlecheVerte.png','score' => '20'),
        ) ?>
        <?php include_component('kup', 'rulesTable', array('rules' => $rules1)) ?>
    </div>
</div>