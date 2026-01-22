<?php
$status = 'validated';

switch ($status) {
    case 'standby':
        ?><span style="color: orange">⏳ Commande en attente de validation</span><?php
                                                                                break;
    case 'validated':
        ?><span style="color: green">Commande validée</span><?php
                                                            break;
    case 'shipped':
        ?><span style="color: yellow">Commande en cours de livraison</span><?php
                                                                            break;
    case 'delivered':
        ?><span style="color: orange">Commande livrée</span><?php
                                                            break;
    case 'canceled':
        ?><span style="color: red">⏳ Commande annulée</span><?php
                                                            break;
}
$message = match ($status) {
    'standby' => 'Livraison en attente',
    'validated' => 'Commande validée',
    'shipped' => 'En cours de livraison',
    'delivered' => 'Commande livrée',
    'canceled' => 'Commande annulée'
};

echo $message;
