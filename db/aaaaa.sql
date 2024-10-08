-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela db-inf-3at.admin: ~0 rows (aproximadamente)

-- Copiando dados para a tabela db-inf-3at.medicamentos: ~5 rows (aproximadamente)
INSERT INTO `medicamentos` (`id`, `tarja`, `quantidade`, `descricao`, `nome`) VALUES
	(1, 'sem tarja', 50, 'Analgésico e antitérmico', 'Paracetamol'),
	(2, 'vermelha', 30, 'Anti-inflamatório não esteroide', 'Ibuprofeno'),
	(3, 'amarela', 20, 'Antibiótico para infecções bacterianas', 'Amoxicilina'),
	(4, 'preta', 40, 'Anti-hipertensivo', 'Losartana'),
	(5, 'sem tarja', 60, 'Alivia gases e inchaço', 'Simeticona');

-- Copiando dados para a tabela db-inf-3at.medicamentoscomusuario: ~0 rows (aproximadamente)
INSERT INTO `medicamentoscomusuario` (`id`, `medicamentoId`, `usuarioId`) VALUES
	(1, 2, 4);

-- Copiando dados para a tabela db-inf-3at.questions: ~11 rows (aproximadamente)
INSERT INTO `questions` (`id`, `type_id`, `question`, `answer`) VALUES
	(6, 1, 'Quais métodos de pagamento são aceitos na sua loja online?', 'Aceitamos uma variedade de métodos de pagamento para tornar sua experiência de compra mais conveniente. Aceitamos cartões de crédito (Visa, MasterCard, American Express), transferência bancária e pagamento através de plataformas online como PayPal.'),
	(7, 1, 'Como posso rastrear o meu pedido após a compra?', 'Após a confirmação da compra, você receberá um e-mail com os detalhes do seu pedido, incluindo um link de rastreamento. Esse link o direcionará para a página de rastreamento, onde você poderá monitorar o status e a localização atualizada do seu pedido em tempo real.'),
	(8, 1, 'Qual é a política de devolução da sua loja?', 'Garantimos a satisfação dos nossos clientes. Se por algum motivo você não estiver satisfeito com sua compra, aceitamos devoluções dentro de 30 dias após o recebimento do produto. Consulte nossa página de política de devolução para obter mais detalhes sobre como proceder com a devolução.'),
	(9, 1, 'Há garantia nos produtos vendidos em sua loja?', 'Sim, oferecemos garantia em muitos dos nossos produtos. Cada produto terá informações específicas sobre a garantia na página do produto. Em caso de dúvidas ou problemas, entre em contato com nossa equipe de atendimento ao cliente, que ficará feliz em ajudar a resolver qualquer questão relacionada à garantia.'),
	(10, 1, 'Vocês oferecem frete grátis para determinadas regiões ou valores de compra?', 'Sim, frequentemente oferecemos frete grátis para pedidos acima de um determinado valor, bem como promoções especiais para regiões específicas. Essas ofertas podem variar, por isso recomendamos verificar a página de frete e promoções para informações atualizadas sobre frete grátis e outras ofertas especiais.'),
	(11, 2, 'Como posso me inscrever para o evento de ciências?', 'A inscrição para o evento de ciências pode ser feita diretamente em nosso site. Visite a página de inscrição, preencha o formulário com suas informações e siga as instruções fornecidas para concluir o processo de inscrição.'),
	(12, 2, 'Quais são as datas limite para as inscrições?', 'As datas de inscrição e suas respectivas prorrogações são divulgadas em nossa página oficial e nas redes sociais. Recomendamos que os interessados verifiquem regularmente essas informações para garantir que não percam as datas importantes de inscrição.'),
	(13, 2, 'Existe alguma taxa de inscrição para participar do evento de ciências?', 'Sim, há uma taxa de inscrição para participar do evento de ciências. Os detalhes sobre as taxas, métodos de pagamento aceitos e prazos de pagamento podem ser encontrados na seção de taxas e pagamentos da página de inscrição.'),
	(14, 2, 'Posso fazer alterações nas informações da minha inscrição após a submissão?', 'Após a submissão da inscrição, algumas informações podem ser alteradas entrando em contato com nossa equipe de suporte. No entanto, recomendamos revisar cuidadosamente todas as informações antes de enviar a inscrição para evitar problemas futuros.'),
	(15, 2, 'Como receberei a confirmação da minha inscrição?', 'Após o processamento da sua inscrição, você receberá uma confirmação por e-mail. Certifique-se de verificar sua caixa de entrada regularmente. A confirmação incluirá detalhes importantes, como a identificação única da sua inscrição e informações sobre o evento de ciências.'),
	(17, 2, 'Segunda Questão', 'Segunda Resposta');

-- Copiando dados para a tabela db-inf-3at.services: ~9 rows (aproximadamente)
INSERT INTO `services` (`id`, `service_category_id`, `name`, `description`) VALUES
	(1, 1, 'Consultoria Técnica', 'Consultoria especializada em engenharia civil e elétrica.'),
	(2, 2, 'Projeto Estrutural', 'Desenvolvimento de projetos estruturais para edificações.'),
	(3, 3, 'Execução de Obras', 'Execução completa de obras residenciais e comerciais.'),
	(4, 4, 'Manutenção Predial', 'Serviços de manutenção preventiva e corretiva em prédios.'),
	(5, 5, 'Gerenciamento de Projetos', 'Gerenciamento de projetos de construção e reforma.'),
	(6, 3, 'Avaliação Estrutural', 'Avaliação técnica de estruturas existentes.'),
	(7, 1, 'Consultoria Ambiental', 'Consultoria em projetos de sustentabilidade e meio ambiente.'),
	(8, 2, 'Projeto Elétrico', 'Desenvolvimento de projetos elétricos para edificações.'),
	(9, 1, 'Laudos Técnicos', 'Emissão de laudos técnicos e pareceres.');

-- Copiando dados para a tabela db-inf-3at.services_categories: ~5 rows (aproximadamente)
INSERT INTO `services_categories` (`id`, `name`) VALUES
	(1, 'Consultoria'),
	(2, 'Projetos'),
	(3, 'Execução de Obras'),
	(4, 'Manutenção'),
	(5, 'Gerenciamento de Projetos');

-- Copiando dados para a tabela db-inf-3at.types: ~4 rows (aproximadamente)
INSERT INTO `types` (`id`, `description`) VALUES
	(1, 'Vendas'),
	(2, 'Inscrições'),
	(3, 'Sobre o Evento'),
	(4, 'Organização');

-- Copiando dados para a tabela db-inf-3at.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`) VALUES
	(4, 'Fábio Luís da Silva Santos', 'fabiosantos@ifsul.edu.br', '$2y$10$7XD1Q0BVr0VlGSXCrbPOm.qDgQcYjPtwmL8jlYRVR9cjV3.eFRv2m', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
