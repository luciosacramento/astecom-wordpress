<?php 
get_header(); 
/*
$array = [[
    "titulo" =>  "2023",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_JANEIRO_2023.pdf\" target=\"_blank\">Referente ao mês de Janeiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_FEVEREIRO_2023.pdf\" target=\"_blank\">Referente ao mês de Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_MARCO_2023.pdf\" target=\"_blank\">Referente ao mês de Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_ABRIL_2023.pdf\" target=\"_blank\">Referente ao mês de Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_MAIO_2023.pdf\" target=\"_blank\">Referente ao mês de Maio</a></li></ul>"
  ],

  [
    "titulo" =>  "2022",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_JANEIRO_2022.pdf\" target=\"_blank\">Referente ao mês de Janeiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_FEVEREIRO_2022.pdf\" target=\"_blank\">Referente ao mês de Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_MARCO_2022.pdf\" target=\"_blank\">Referente ao mês de Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_ABRIL_2022.pdf\" target=\"_blank\">Referente ao mês de Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_MAIO_2022.pdf\" target=\"_blank\">Referente ao mês de Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_JUNHO_2022.pdf\" target=\"_blank\">Referente ao mês de Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_JULHO_2022.pdf\" target=\"_blank\">Referente ao mês de Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_AGOSTO_2022.pdf\" target=\"_blank\">Referente ao mês de Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_SETEMBRO_2022.pdf\" target=\"_blank\">Referente ao mês de Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_OUTUBRO_2022.pdf\" target=\"_blank\">Referente ao mês de Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_NOVEMBRO_2022.pdf\" target=\"_blank\">Referente ao mês de Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_DEZEMBRO_2022.pdf\" target=\"_blank\">Referente ao mês de Dezembro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2021",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_JANEIRO_2021.pdf\" target=\"_blank\">Referente ao mês de Janeiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_FEVEREIRO_2021.pdf\" target=\"_blank\">Referente ao mês de Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_MARCO_2021.pdf\" target=\"_blank\">Referente ao mês de Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_ABRIL_2021.pdf\" target=\"_blank\">Referente ao mês de Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_MAIO_2021.pdf\" target=\"_blank\">Referente ao mês de Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_JUNHO_2021.pdf\" target=\"_blank\">Referente ao mês de Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_JULHO_2021.pdf\" target=\"_blank\">Referente ao mês de Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_AGOSTO_2021.pdf\" target=\"_blank\">Referente ao mês de Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_SETEMBRO_2021.pdf\" target=\"_blank\">Referente ao mês de Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_OUTUBRO_2021.pdf\" target=\"_blank\">Referente ao mês de Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_NOVEMBRO_2021.pdf\" target=\"_blank\">Referente ao mês de Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancetes_DEZEMBRO_2021.pdf\" target=\"_blank\">Referente ao mês de Dezembro</a></li></ul>"
    
  ],
    [
    "titulo" =>  "2020",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_Janeiro_2020.pdf\" target=\"_blank\">Referente ao mês de Janeiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_Fevereiro_2020.pdf\" target=\"_blank\">Referente ao mês de Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_MARCO_2020.pdf\" target=\"_blank\">Referente ao mês de Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_ABRIL_2020.pdf\" target=\"_blank\">Referente ao mês de Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_MAIO_2020.pdf\" target=\"_blank\">Referente ao mês de Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_JUNHO_2020.pdf\" target=\"_blank\">Referente ao mês de Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_JULHO_2020.pdf\" target=\"_blank\">Referente ao mês de Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_AGOSTO_2020.pdf\" target=\"_blank\">Referente ao mês de Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_SETEMBRO_2020.pdf\" target=\"_blank\">Referente ao mês de Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_OUTUBRO_2020.pdf\" target=\"_blank\">Referente ao mês de Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_NOVEMBRO_2020.pdf\" target=\"_blank\">Referente ao mês de Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_DEZEMBRO_2020.pdf\" target=\"_blank\">Referente ao mês de Dezembro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2019",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Janeiro_2019.pdf\" target=\"_blank\">Referente ao mês de Janeiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Fevereiro_2019.pdf\" target=\"_blank\">Referente ao mês de Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/marco_2019.pdf\" target=\"_blank\">Referente ao mês de Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/abril_2019.pdf\" target=\"_blank\">Referente ao mês de Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/maio_2019.pdf\" target=\"_blank\">Referente ao mês de Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/JUNHO_2019.pdf\" target=\"_blank\">Referente ao mês de Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/JULHO_2019.pdf\" target=\"_blank\">Referente ao mês de Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/AGOSTO_2019.pdf\" target=\"_blank\">Referente ao mês de Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Setembro_2019.pdf\" target=\"_blank\">Referente ao mês de Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Outubro_2019.pdf\" target=\"_blank\">Referente ao mês de Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_Novembro_2019.pdf\" target=\"_blank\">Referente ao mês de Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Balancete_Dezembro_2019.pdf\" target=\"_blank\">Referente ao mês de Dezembro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2018",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE-JANEIRO-2018.pdf\" target=\"_blank\">Referente ao mês de Janeiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE-FEVEREIRO-2018.pdf\" target=\"_blank\">Referente ao mês de Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE-MARCO-2018.pdf\" target=\"_blank\">Referente ao mês de Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE-ABRIL-2018.pdf\" target=\"_blank\">Referente ao mês de Abrir</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE-MAIO-2018.pdf\" target=\"_blank\">Referente ao mês de Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/JUNHO_2018.pdf\" target=\"_blank\">Referente ao mês de Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/JULHO_2018.pdf\" target=\"_blank\">Referente ao mês de Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/AGOSTO_2018.pdf\" target=\"_blank\">Referente ao mês de Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/SETEMBRO_2018.pdf\" target=\"_blank\">Referente ao mês de Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Outubro_2018.pdf\" target=\"_blank\">Referente ao mês de Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Novembro_2018.pdf\" target=\"_blank\">Referente ao mês de Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Dezembro_2018.pdf\" target=\"_blank\">Referente ao mês de Dezembro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2017",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE-JANEIRO-2017.pdf\" target=\"_blank\">Referente ao mês de Janeiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE-FEVEREIRO-2017.pdf\" target=\"_blank\">Referente ao mês de Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE-MARCO-2017.pdf\" target=\"_blank\">Referente ao mês de Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE-ABRIL-2017.pdf\" target=\"_blank\">Referente ao mês de Abrir</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Maio_2017.pdf\" target=\"_blank\">Referente ao mês de Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Junho_2017.pdf\" target=\"_blank\">Referente ao mês de Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Julho_2017.pdf\" target=\"_blank\">Referente ao mês de Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Agosto_2017.pdf\" target=\"_blank\">Referente ao mês de Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Setembro_2017.pdf\" target=\"_blank\">Referente ao mês de Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Outubro_2017.pdf\" target=\"_blank\">Referente ao mês de Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Novembro_2017.pdf\" target=\"_blank\">Referente ao mês de Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Dezembro_2017.pdf\" target=\"_blank\">Referente ao mês de Dezembro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2016",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BAL_DEZEMBRO_16.pdf\" target=\"_blank\">Referente ao mês de Dezembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BAL_NOVEMBRO_16.pdf\" target=\"_blank\">Referente ao mês de Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BAL_OUTUBRO_16.pdf\" target=\"_blank\">Referente ao mês de Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BAL_SETEMBRO_16.pdf\" target=\"_blank\">Referente ao mês de Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BAL_AGOSTO_16.pdf\" target=\"_blank\">Referente ao mês de Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal.Astecom2016_jul.pdf\" target=\"_blank\">Referente ao mês de Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal.Astecom2016_jun.pdf\" target=\"_blank\">Referente ao mês de Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal.Astecom2016_mai.pdf\" target=\"_blank\">Referente ao mês de Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal.Astecom2016_abr.pdf\" target=\"_blank\">Referente ao mês de Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal.Astecom2016_mar.pdf\" target=\"_blank\">Referente ao mês de Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal.Astecom2016_fev.pdf\" target=\"_blank\">Referente ao mês de Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal.Astecom2016_jan.pdf\" target=\"_blank\">Referente ao mês de Janeiro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2015",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Astecom_Dezembro_2015.pdf\" target=\"_blank\">Dezembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Astecom_Novembro_2015.pdf\" target=\"_blank\">Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/Bal_Astecom_Outubro_2015.pdf\" target=\"_blank\">Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_SETEMBRO_2015.pdf\" target=\"_blank\">Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_AGOSTO_2015.pdf\" target=\"_blank\">Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JULHO_2015.pdf\" target=\"_blank\">Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JUNHO_2015.pdf\" target=\"_blank\">Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MAIO_2015.pdf\" target=\"_blank\">Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_ABRIL_2015.pdf\" target=\"_blank\">Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MARCO_2015.pdf\" target=\"_blank\">Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_FEV_2015.pdf\" target=\"_blank\">Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_JAN_2015.pdf\" target=\"_blank\">Janeiro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2014",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_DEZ_2014.pdf\" target=\"_blank\">Dezembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_NOVEMBRO_2014.pdf\" target=\"_blank\">Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_OUTUBRO_2014.pdf\" target=\"_blank\">Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_SET_2014.pdf\" target=\"_blank\">Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_AGO_2014.pdf\" target=\"_blank\">Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_JUL_2014.pdf\" target=\"_blank\">Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_JUN_2014.pdf\" target=\"_blank\">Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_MAI_2014.pdf\" target=\"_blank\">Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_ABR_2014.pdf\" target=\"_blank\">Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_MAR_2014.pdf\" target=\"_blank\">Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_FEV_2014.pdf\" target=\"_blank\">Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_JAN_2014.pdf\" target=\"_blank\">Janeiro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2013",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/ASTECOM Bal. dezembro 2013.pdf\" target=\"_blank\">Dezembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/ASTECOM Bal. novembro 2013.pdf\" target=\"_blank\">Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/ASTECOM Bal. outubro 2013.pdf\" target=\"_blank\">Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/ASTECOM Bal. setembro 2013.pdf\" target=\"_blank\">Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/ASTECOM Bal. agosto 2013.pdf\" target=\"_blank\">Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/ASTECOM Bal. julho 2013.pdf\" target=\"_blank\">Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JUNHO_2013.jpg\" target=\"_blank\">Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MAIO_2013.jpg\" target=\"_blank\">Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_ABRIL_2013.jpg\" target=\"_blank\">Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MARCO_2013.jpg\" target=\"_blank\">Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_FEV_2013.jpg\" target=\"_blank\">Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETES_JAN_2013.jpg\" target=\"_blank\">Janeiro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2012",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_DEZEMBRO_2012.pdf\" target=\"_blank\">Dezembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_NOVEMBRO_2012.pdf\" target=\"_blank\">Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_OUTUBRO_2012.pdf\" target=\"_blank\">Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_SET_2012.pdf\" target=\"_blank\">Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_AGO_2012.pdf\" target=\"_blank\">Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JUL_2012.pdf\" target=\"_blank\">Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JUN_2012.pdf\" target=\"_blank\">Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MAI_2012.pdf\" target=\"_blank\">Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_ABR_2012.pdf\" target=\"_blank\">Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MAR_2012.pdf\" target=\"_blank\">Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_FEV_2012.pdf\" target=\"_blank\">Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JAN_2012.pdf\" target=\"_blank\">Janeiro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2011",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_DEZ_2011.pdf\" target=\"_blank\">Dezembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_NOV_2011.pdf\" target=\"_blank\">Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_OUT_2011.pdf\" target=\"_blank\">Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_SET_2011.pdf\" target=\"_blank\">Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_AGO_2011.pdf\" target=\"_blank\">Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JUL_2011.pdf\" target=\"_blank\">Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JUN_2011.pdf\" target=\"_blank\">Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MAI_2011.pdf\" target=\"_blank\">Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_ABR_2011.pdf\" target=\"_blank\">Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MAR_2011.pdf\" target=\"_blank\">Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_FEV_2011.pdf\" target=\"_blank\">Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JAN_2011.pdf\" target=\"_blank\">Janeiro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2010",
    "conteudo" => "<ul><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_DEZ_2010.pdf\" target=\"_blank\">Dezembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_NOV_2010.pdf\" target=\"_blank\">Novembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_OUT_2010.pdf\" target=\"_blank\">Outubro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_SET_2010.pdf\" target=\"_blank\">Setembro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_AGO_2010.pdf\" target=\"_blank\">Agosto</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JUL_2010.pdf\" target=\"_blank\">Julho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JUN_2010.pdf\" target=\"_blank\">Junho</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MAI_2010.pdf\" target=\"_blank\">Maio</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_ABR_2010.pdf\" target=\"_blank\">Abril</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_MAR_2010.pdf\" target=\"_blank\">Março</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_FEV_2010.pdf\" target=\"_blank\">Fevereiro</a></li><li><a href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/BALANCETE_JAN_2010.pdf\" target=\"_blank\">Janeiro</a></li></ul>"
    
  ],
   [
    "titulo" =>  "2009",
    "conteudo" => "<ul><li class=\"vermelha\">2009</li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/dez09.html\">Referente ao m&ecirc;s de Dezembro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/nov09.html\">Referente ao m&ecirc;s de Novembro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/out09.html\">Referente ao m&ecirc;s de Outubro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/agosto09.html\">Referente ao m&ecirc;s de Setembro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/agosto09.html\">Referente ao m&ecirc;s de Agosto</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/julho09.html\">Referente ao m&ecirc;s de Julho</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/junho09.html\">Referente ao m&ecirc;s de Junho</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/maio09.html\">Referente ao m&ecirc;s de Maio</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/abril09.html\">Referente ao m&ecirc;s de Abril</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/marco09.html\">Referente ao m&ecirc;s de Mar&ccedil;o</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/fevereiro09.html\">Referente ao m&ecirc;s de Fevereiro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/janeiro09.html\">Referente ao m&ecirc;s de Janeiro</a></li></ul>"
    
  ],
  [
    "titulo" =>  "2008",
    "conteudo" => "<ul><li class=\"vermelha\">de 2008</li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/dezembro08.html\">Referente ao m&ecirc;s de Dezembro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/novembro08.html\">Referente ao m&ecirc;s de Novembro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/outubro.html\">Referente ao m&ecirc;s de Outubro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/setembro.html\">Referente ao m&ecirc;s de Setembro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/agosto.html\">Referente ao m&ecirc;s de Agosto</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/julho.html\">Referente ao m&ecirc;s de Julho</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/junho.html\">Referente ao m&ecirc;s de Junho</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/maio.html\">Referente ao m&ecirc;s de Maio</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/abril.html\">Referente ao m&ecirc;s de Abril</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/marco.html\">Referente ao m&ecirc;s de Mar&ccedil;o</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/fevereiro.html\">Referente ao m&ecirc;s de Fevereiro</a></li><li class=\"decor\"><span class=\"vermelha\">&raquo;</span> <a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/janeiro.html\">Referente ao m&ecirc;s de Janeiro</a></li></ul>"
    
  ],

[
    "titulo" =>  "2007",
    "conteudo" => "<ul><li><a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/dezembro.html\" target=\"_blank\">Referente ao mês de Dezembro</a></li><li><a target=\"_blank\" href=\"http://www.astecom-ba.com.br/wp-content/uploads/balancetes/novembro.html\" target=\"_blank\">Referente ao mês de Novembro</a></li></ul>"
  ]];

 



$diretorias = array(
    array(
        "titulo" => "Diretoria Atual Triênio 2022 | 2024",
        "conteudo" => array(
            "Manoel Augusto da Cunha Filho (Presidente)",
            "Alex Nunes Soares (Vice-Presidente)",
            "Fernando Carneiro da Silva Neto (1º Secretário)",
            "Jailton Boaventura Arouca (2º Secretario)",
            "Selma da Silva (1º Tesoureira)",
            "Jair Conceição Oliveira (2º Tesoureiro)"
        )
    ),
    array(
        "titulo" => "Diretoria Atual Triênio 2018 | 2021",
        "conteudo" => array(
            "Manoel Augusto da Cunha Filho (Presidente)",
            "José Costa dos Santos (Vice-Presidente)",
            "Fernando Carneiro da Silva Neto (1º Secretário)",
            "Jailton Boaventura Arouca (2º Secretario)",
            "Selma da Silva (1º Tesoureira)",
            "Jair Conceição Oliveira (2º Tesoureiro)"
        )
    ),
    array(
        "titulo" => "Diretoria Atual Triênio 2016 | 2018",
        "conteudo" => array(
            "Manoel Augusto da Cunha Filho (Presidente)",
            "José Costa dos Santos (Vice-Presidente)",
            "Fernando Carneiro da Silva Neto (1º Secretário)",
            "Jailton Boaventura Arouca (2º Secretario)",
            "Selma da Silva (1º Tesoureira)",
            "Oscar Silva Neto (2º Tesoureiro)"
        )
    ),
    array(
        "titulo" => "Diretoria Atual Triênio 2013 | 2015",
        "conteudo" => array(
            "Manoel Augusto da Cunha Filho (Presidente)",
            "Aldemir Lima Fialho (Vice-Presidente)",
            "Jorge Henrique Santos de Queiroz (1º Secretário)",
            "Genivaldo Amorim Júnior (2º Secretario)",
            "Selma da Silva (1º Tesoureira)",
            "Fernando Esquivel (2º Tesoureiro)"
        )
    ),
    array(
        "titulo" => "Diretoria Triênio 2010 | 2012",
        "conteudo" => array(
            "Manoel Augusto da Cunha Filho (Presidente)",
            "José Costa dos Santos (Vice-Presidente)",
            "Jorge Henrique Santos de Queiroz (1º Secretário)",
            "Genivaldo Amorim Júnior (2º Secretario)",
            "Selma da Silva (1º Tesoureira)",
            "Fernando Esquivel (2º Tesoureiro)"
        )
    ),
    array(
        "titulo" => "Biênio (2007/2009)",
        "conteudo" => array(
            "Manoel Augusto da Cunha Filho (Presidente)",
            "José Costa dos Santos (Vice-Presidente)",
            "Jorge Henrique Santos de Queiroz (1º Secretário)",
            "Pedro Sérgio dos Santos Lavigne (2º Secretario)",
            "Selma da Silva (1º Tesoureiro)",
            "José Mário Paim de Oliveira (2º Tesoureiro)"
        )
    ),
    array(
        "titulo" => "Biênio (2005/2007)",
        "conteudo" => array(
            "Maria do Rosário Libório Ribeiro Guimarães (Presidente)",
            "Fabrícia Martins Chaves (Vice-Presidente)",
            "Noêmia Peixinho de Miranda (1º Secretário)",
            "César Luiz Galvão de Melo (2º Secretario)",
            "Robson Fernandes Arapiraca (1º Tesoureiro)",
            "Aldemir Lima Fialho (2º Tesoureiro)"
        )
    ),
    array(
        "titulo" => "Biênio (2003/2005)",
        "conteudo" => array(
            "Maria do Rosário Libório Ribeiro Guimarães (Presidente)",
            "Luiz Augusto Freitas Conceição (Vice-Presidente)",
            "César Luiz Galvão de Melo (1º Secretário)",
            "Plínio Carneiro da Silva Filho (2º Secretario)",
            "Aldemir Lima Fialho (1º Tesoureiro)",
            "Luiz Carlos de Araújo (2º Tesoureiro)"
        )
    ),
    array(
        "titulo" => "Biênio (2001/2003)",
        "conteudo" => array(
            "Maria do Rosário Libório Ribeiro Guimarães (Presidente)",
            "Francisco de Assis Nunes de Oliveira (Vice-Presidente)",
            "César Luiz Galvão de Melo (1º Secretário)",
            "Waldina de Almeida Sampaio (2º Secretario)",
            "Luiz Carlos de Araújo (1º Tesoureiro)",
            "Plínio Carneiro da Silva Filho (2º Tesoureiro)"
        )
    ),
    array(
        "titulo" => "Biênio (1999/2001)",
        "conteudo" => array(
            "Manoel Galvão Rogério de Souza (Presidente)",
            "Aldemir Lima Fialho (Vice-Presidente)",
            "Antônio Dourado Vasconcelos (1º Secretário)",
            "Edvânia Miguel da Costa (2º Secretario)",
            "Jorge Henrique Santos Queiroz (1º Tesoureiro)",
            "Maria do Rosário Libório Ribeiro Guimarães (2º Tesoureiro)"
        )
    )
);




/// Loop pelos itens do array e insira no tipo de conteúdo 'demonstrativos_financeiro'
foreach ($diretorias as $item) {


    $conteudo = "<ul>";

    foreach ($item['conteudo'] as $item_conteudo) {
        $conteudo .= "<li>" . $item_conteudo . "</li>";
    }   

    $conteudo .= "</ul>";

    $novo_post = array(
        'post_title'   => $item['titulo'],
        'post_content' => $conteudo,
        'post_status'  => 'publish',
        'post_type'    => 'diretoria',
    );

    // Insere o post no banco de dados
    $post_id = wp_insert_post($novo_post);

    echo('Post inserido com sucesso. ID do post: ' . $post_id . '<br>');

    // Verifica se houve algum erro
    if (is_wp_error($post_id)) {
        // Trate o erro conforme necessário
        echo 'Erro ao inserir post: ' . $post_id->get_error_message();
    }
}
 
 //function obter_demonstrativos_financeiros($data) {
  $args = array(
      'post_type' => 'demon_financeiro',
      'posts_per_page' => -1,
  );

  $demonstrativos_financeiros = get_posts($args);

  $resposta = array();

  foreach ($demonstrativos_financeiros as $demonstrativo_financeiro) {
      $resposta[] = array(
          'id' => $demonstrativo_financeiro->ID,
          'titulo' => $demonstrativo_financeiro->post_title,
          'conteudo' => $demonstrativo_financeiro->post_content,
      );
  }

  print_r(rest_ensure_response($resposta));
//}

*/


get_footer(); 
?>