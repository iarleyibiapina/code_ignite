[Repositorio_casa]

´branchs´
repositorio: opovo
main - é a branch que eu altero no meu pc local
teste - é a branch que eu 'puxo' do repositorio de trabalho 'opovo' da branch 'main'

|banco|
nome: ci4tutorial

[Repositorio_Opovo]

'branchs'

main - é a branch que eu altero no meu pc local de trabalho
teste - é a branch que eu 'puxo' do repositorio 'opovo' branch 'main' de casa.

|banco|

nome: codeignitermain

-- pequenos codigos --

para verificar se pagina existente

    public function view($page = "index"){
        if(!is_file(APPPATH . 'Views/Pages/' . $page . '.php')){
            //se nao achar a view, retorna erro de esta pagina não existe.
            throw new PageNotFoundException($page);
        }
        // se pagina existir

        // uc first, Primeira letra maiuscula
        $data['title'] = ucfirst($page);

        // concatenando views, e o 'compact'
        return view('templates/header', $data).view('Pages/' . $page).view('templates/footer');
    }
