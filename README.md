# Tema Customizado - Magento 2

## 🧩 Descrição
Conforme solicitado no teste, o desenvolvimento foi realizado **100% via código**, sem a utilização de blocos CMS ou configurações do painel administrativo do Magento.

## 🖼️ Banner e Carrosséis
Para os carrosséis — tanto o **banner principal** quanto as **vitrines de produtos** na home — foi utilizada a biblioteca **Slick Slider**, garantindo uma navegação fluida e responsiva.

## 🧱 Estrutura e Módulos
Para exibir a **vitrine de produtos na página inicial**, foi criado um **módulo customizado (`Hibrido_Theme`)**, responsável por:
- Fornecer um **ViewModel** para o bloco da vitrine;
- Carregar dinamicamente a **coleção de produtos** a partir do catálogo Magento.

## ⚙️ Tecnologias e Princípios
- Magento 2 (Frontend Theme)
- LESS / RequireJS
- Slick Slider
- ViewModel (MVVM Pattern)
- Desenvolvimento orientado a código, sem uso de CMS

---

## 🚀 Como testar
1. Instalar o tema e o módulo
2. Ativar o tema **Luma Child** em **Content > Design > Configuration**
