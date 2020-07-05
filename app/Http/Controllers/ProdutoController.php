<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Produto;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$produtos = \App\Produto::paginate(15);
    	return view('produto.index',compact('produtos'));
    }
    public function adicionar()
    {
    	return view('produto.adicionar');
    }

    public function detalhe($id)
    {
        $produto = \App\Produto::find($id);
        return view('produto.detalhe',compact('produto'));
    }

    public function salvar(\App\Http\Requests\ProdutoRequest $request){
        $produto = new Produto();
        $produto->categoria = $request->input('categoria');
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->valor = $request->input('valor');
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/produtos/', $filename);
            $produto->foto = $filename;
            // $request->merge(["produto"=>$produto->foto]);
        }

    	\App\Produto::create($request->all());
    	\Session::flash('flash_message',[
			'msg'=>"Produto adicionado com sucesso!",
			'class'=>"alert-success"
    	]);
    	return redirect()->route('produto.index');
    }

    public function editar($id)
    {
        $produto = \App\Produto::find($id);
        if(!$produto){
            \Session::flash('flash_message',[
                'msg'=>"Não existe esse produto cadastrado! Deseja cadastrar um novo produto?",
                'class'=>"alert-danger"
            ]);
            return redirect()->route('produto.adicionar');
        }
        return view('produto.editar',compact('produto'));
    }

    public function atualizar(\App\Http\Requests\ProdutoRequest $request,$id)
    {
        // $produto = new Produto();
        // $produto->categoria = $request->input('categoria');
        // $produto->nome = $request->input('nome');
        // $produto->descricao = $request->input('descricao');
        // $produto->valor = $request->input('valor');
        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('uploads/produtos/', $filename);
        //     $produto->foto = $filename;
        // } else {
        //     return $request;
        //     $produto->foto = '';
        // }
        // $request->merge(["produto"=>$produto->foto]);

        \App\Produto::find($id)->update($request->all());
        \Session::flash('flash_message',[
            'msg'=>"Produto atualizado com Sucesso!",
            'class'=>"alert-success"
        ]);
        return redirect()->route('produto.index');        
    }

    public function deletar($id)
    {
        $produto = \App\Produto::find($id);
        $produto->delete();
        \Session::flash('flash_message',[
            'msg'=>"Produto deletado com sucesso!",
            'class'=>"alert-success"
        ]);
        return redirect()->route('produto.index'); 
    }
}