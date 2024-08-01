<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentProgress;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DocumentoProgressController extends Controller
{
    public function updateProgress(Request $request)
    {
        $userId = Auth::id(); // Obtén el ID del usuario autenticado
        $documentId = $request->input('documentoId');
        $progress = $request->input('progress');

        // Encuentra o crea un registro de progreso para este usuario y video
        $documentProgress  = DocumentProgress::updateOrCreate(
            ['user_id' => $userId, 'documento_id' => $documentId],
            ['progress' => $progress]
        );

        return response()->json(['status' => 'success']);
    }
}
