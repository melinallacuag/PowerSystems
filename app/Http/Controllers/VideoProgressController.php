<?php

namespace App\Http\Controllers;

use App\Models\VideoView;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VideoProgress;
use Illuminate\Support\Facades\Auth;

class VideoProgressController extends Controller
{
   public function updateProgress(Request $request)
    {
        $userId = Auth::id(); // Obtén el ID del usuario autenticado
        $videoId = $request->input('videoId');
        $progress = $request->input('progress');

        // Encuentra o crea un registro de progreso para este usuario y video
        $videoProgress = VideoProgress::updateOrCreate(
            ['user_id' => $userId, 'video_id' => $videoId],
            ['progress' => $progress]
        );

        return response()->json(['status' => 'success']);
    }
}
