<h1>MoVus</h1>

Esse é o repositório do projeto integrado do curso de Desenvolvimento de Software Multiplataforma da Fatec Itapira/2023 - MoVus.<br><br>
O projeto tem como iniciativa controlar uma frota para transportes públicos no município com o intuito de representar ideias de cidades inteligentes, trazendo praticidade, segurança e benefícios para os usuários deste meio de locomoção.<br><br>

<h2>Funcionalidades:</h2>
O sistema tem por iniciativa manipular as informações de transporte público, que tenha um sensor de geolocalização instalado, onde, envia de forma automática a sua localização e informações de percurso para um banco de dados MongoDB.<br><br>

<h2>Resultado:</h2>
Para a data atual, precisamos fazer algumas adaptações, pois não utilizaremos o sensor em campo. Para a simulação, criamos uma api em JAVA, conectada ao banco de dados não relacional MongoDB, que envia algumas localizações de rotas alternativas e informações sobre localidade de um ônibus. Essa api disponibiliza os dados inseridos e acessados do MongoDB em um json público, que é acessado pela plataforma através de PHP e Javascript, com AJAX.<br><br>

Com os dados recuperados do JSON, utilizamos a API do Google Maps para exibir as informações de localização em tempo real e atributos do transporte em movimento.<br><br>
