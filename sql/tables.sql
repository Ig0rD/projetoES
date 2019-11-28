CREATE TABLE "Cliente" (
   endereco varchar(100),
   telefone char(11),
   cpf char(11),
   email varchar(100) NOT NULL,
   nome varchar(100) NOT NULL,
    CONSTRAINT "ClientePK" PRIMARY KEY (cpf)
);

CREATE TABLE "Reparos" (
   codReparo serial NOT NULL,
   status varchar(100) NOT NULL,
   descricao varchar(500),
   fotoAntes varchar(200) NOT NULL,
   fotoDepois varchar(200),
   preco decimal,
   dataReparo date NOT NULL,
   clienteCPF char(100),
    CONSTRAINT "ReparosPK" PRIMARY KEY (codReparo),
    CONSTRAINT "ReparosClienteFK" FOREIGN KEY (clienteCPF)
        REFERENCES "Cliente" (cpf)
        ON UPDATE CASCADE
        ON DELETE SET NULL
);
 
CREATE TABLE "VendedorAdmin" (
   nome varchar(100) NOT NULL,
   email varchar(100) NOT NULL,
   telefone char(100) NOT NULL,
   cpf char(100),
    CONSTRAINT "Vendedor_AdminPK" PRIMARY KEY (cpf)
);
 
CREATE TABLE "Categoria" (
    nome varchar(100) NOT NULL,
    codCategoria serial NOT NULL,
    CONSTRAINT "CategoriaPK" PRIMARY KEY (codCategoria)
);
 
CREATE TABLE "Item" (
   foto varchar(200) NOT NULL,
   codCategoria int,
   precoVenda decimal NOT NULL,
   nome varchar(100) NOT NULL,
   codItem serial NOT NULL,
   descricao varchar(500),
   precoCompra decimal NOT NULL,
   quantidadeDisponivel int NOT NULL,
    CONSTRAINT "ItemPK" PRIMARY KEY (codItem),
    CONSTRAINT "ItemCategoriaFK" FOREIGN KEY (codCategoria)
        REFERENCES "Categoria" (codCategoria)
        ON UPDATE CASCADE
        ON DELETE SET NULL
);
 
CREATE TABLE "Compra" (
   clienteCPF char(11) NOT NULL,
   codItem int NOT NULL,
    quantidade int NOT NULL,
    precoPago decimal NOT NULL,
   dataCompra date NOT NULL,
   codCompra serial NOT NULL,
    CONSTRAINT "CompraPK" PRIMARY KEY (codCompra),
    CONSTRAINT "CompraClienteFK" FOREIGN KEY (clienteCPF)
        REFERENCES "Cliente" (cpf)
        ON UPDATE NO ACTION
        ON DELETE NO ACTION,
    CONSTRAINT "CompraItemFK" FOREIGN KEY (codItem)
        REFERENCES "Item" (codItem)
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
);




