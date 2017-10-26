
<tr><th colspan="2">Motherboard Info</th></tr>
<?php if (get_field('supported_cpu')) { ?>
<tr><td class="sp_type">Supported CPU</td><td><?php echo get_field('supported_cpu'); ?></td></tr>
<?php } ?>
<?php if (get_field('mb_sockets')) { ?>
<tr><td class="sp_type">Sockets</td><td><?php echo get_field('mb_sockets'); ?></td></tr>
<?php } ?>
<?php if (get_field('pci_express_slots')) { ?>
<tr><td class="sp_type">PCI Express slots</td><td><?php echo get_field('pci_express_slots'); ?></td></tr>
<?php } ?>
<?php if (get_field('sata_port')) { ?>
<tr><td class="sp_type">Sata port</td><td><?php echo get_field('sata_port'); ?></td></tr>
<?php } ?>
<?php if (get_field('audio_chipset')) { ?>
<tr><td class="sp_type">Audio chipset</td><td><?php echo get_field('audio_chipset'); ?></td></tr>
<?php } ?>
<?php if (get_field('lan_chipset')) { ?>
<tr><td class="sp_type">LAN chipset</td><td><?php echo get_field('lan_chipset'); ?></td></tr>
<?php } ?>
<?php if (get_field('directx_support')) { ?>
<tr><td class="sp_type">Direct-X Support</td><td><?php echo get_field('directx_support'); ?></td></tr>
<?php } ?>
