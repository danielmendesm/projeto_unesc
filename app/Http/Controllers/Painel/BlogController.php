<?php

namespace App\Http\Controllers\Painel;

use App\Categoria;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $reg = Post::all();
        return view('painel.blog.index',compact('reg'));
    }

    public function novo()
    {
        $categorias = Categoria::all();
        return view('painel.blog.novo',compact('categorias'));
    }

    public function cadastrar(Request $request)
    {
        $dados = $request->all();

        if (isset($dados['status'])){
            $dados['status'] = '1';
        } else {
            $dados['status'] = '0';
        }

        if($request->hasFile('image')) {
            $imagem  = $request->file('image');
            $rand    = rand('1111','9999');
            $dir     = "imagens/blog/";
            $ext     = $imagem->guessClientExtension();
            $nomeimg = "img_" . $rand . '.' . $ext;
            $imagem->move($dir,$nomeimg);
            $dados['image'] = $dir . $nomeimg;
        }
        Post::create($dados);
        return redirect('painel/blog');
    }

    public function delete($id)
    {
        Post::find($id)->delete();

        return redirect('painel/blog');
    }

    public function editar($id)
    {
        $categorias = Categoria::all();
        $reg        = Post::find($id);
        return view('painel.blog.edita',compact('categorias','reg'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();

        if (isset($dados['status'])){
            $dados['status'] = '1';
        } else {
            $dados['status'] = '0';
        }

        if($request->hasFile('image')) {
            $imagem  = $request->file('image');
            $rand    = rand('1111','9999');
            $dir     = "imagens/blog/";
            $ext     = $imagem->guessClientExtension();
            $nomeimg = "img_" . $rand . '.' . $ext;
            $imagem->move($dir,$nomeimg);
            $dados['image'] = $dir . $nomeimg;
        }
        Post::find($id)->update($dados);
        return redirect('painel/blog');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
