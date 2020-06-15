<?php $cabecalho = "<?xml version='1.0' encoding='UTF-8'?>
<zabbix_export>
<version>4.4</version>
<date>2020-04-24T13:33:16Z</date>
<groups>
<group>
<name>ESTACAO-DQX</name>
</group>
</groups>
<hosts>"; 

$arquivo = fopen('hosts.xml','w');
if ($arquivo == false) die('Não foi possível criar o arquivo.');
fwrite($arquivo, $cabecalho);
?>

<?php
$sql = "SELECT * FROM hosts_temp";
$sql = $pdo->prepare($sql);
$sql->execute();
if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $value) : ?>
        <?php fwrite($arquivo, "<host>
        <host>".$value['circuito']." - ESTACAO</host>
        <name>".$value['circuito']." - ESTACAO</name>
        <description>".$value['cliente']." - ".$value['circuito']."</description>
        <templates>
        <template>
        <name>EDD_TEMPLATE_V1</name>
        </template>
        </templates>
        <groups>
        <group>
        <name>NOVOS</name>
        </group>
        </groups>
        <interfaces>
        <interface>
        <type>SNMP</type>
        <ip>".$value['ip_estacao']."</ip>
        <port>161</port>
        <interface_ref>if1</interface_ref>
        </interface>
        </interfaces>
        <inventory>
        <location>".$value['switch']." - 1/".$value['porta']." - VLAN ".$value['vlan']." - ESTACAO ".$value['estacao']."</location>
        <host_networks>CABO ".$value['cabo']." - DGO ".$value['dgo']." - POS ".$value['pos']." - FILA ".$value['fila']." - FIBRA ".$value['fibra']."</host_networks>
        </inventory>
        </host>
        <host>
        <host>".$value['circuito']." - CLIENTE</host>
        <name>".$value['circuito']." - CLIENTE</name>
        <description>".$value['cliente']." - ".$value['circuito']."</description>
        <templates>
        <template>
        <name>EDD_TEMPLATE_V1</name>
        </template>
        </templates>
        <groups>
        <group>
        <name>NOVOS</name>
        </group>
        </groups>
        <interfaces>
        <interface>
        <type>SNMP</type>
        <ip>".$value['ip_cliente']."</ip>
        <port>161</port>
        <interface_ref>if1</interface_ref>
        </interface>
        </interfaces>
        <inventory>
        <location>".$value['switch']." - 1/".$value['porta']." - VLAN ".$value['vlan']." - ESTACAO ".$value['estacao']."</location>
        <host_networks>CABO ".$value['cabo']." - DGO ".$value['dgo']." - POS ".$value['pos']." - FILA ".$value['fila']." - FIBRA ".$value['fibra']."</host_networks>
        </inventory>
        </host>"); ?>
    <?php endforeach; ?>
<?php
}

$rodape = "</hosts>
</zabbix_export>";

fwrite($arquivo, $rodape);

?>
