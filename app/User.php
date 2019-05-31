<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

/*
eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA4OTk0N2NjZDRkODlhNDBhMzNlZGQ1MzY5NDIwN2ZhMDhmZmU4M2ViNTIyZGY5MDdhYTNkYTE5OTc2YzI0NmMxYWM1NDdmOGI2YTJiYWE5In0.eyJhdWQiOiIyIiwianRpIjoiMDg5OTQ3Y2NkNGQ4OWE0MGEzM2VkZDUzNjk0MjA3ZmEwOGZmZTgzZWI1MjJkZjkwN2FhM2RhMTk5NzZjMjQ2YzFhYzU0N2Y4YjZhMmJhYTkiLCJpYXQiOjE1NTkzMTE4NDEsIm5iZiI6MTU1OTMxMTg0MSwiZXhwIjoxNTkwOTM0MjQxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.jWc3eld44vFulGJjQr3TmACo6sQhxkhV3J3gjyVOWGDu0jHfqaTBmQMnELX7b_zi4t4oNT_0otDFKMMAxLbUEU7JAwaTSUPaQGvM03lAzzI29IqJX0X8JjZXTeisd_9gdalFR_OC9mZuBHPePAXJiGgWsqeKo6JjxJzHbh5m8rI8I-wy7X1HLSR9zoJyghuiB5vv9SoRtXtzfLoo2AO7msUTO5JZCbrXBtK3yhwMX41ysbIihwCp-eqmwiNn8xGkEqondVBbN67aPGc2axANcuEIKRmg7MqEeVyDmTyR_dyQO4lwYVESlAR4d7Hl2ByeAdq85KjwehW_Lq7RZ7lMDAgZRT2S3pD9dHYB1ZVTuhta9h70mKoxV_NFE9JMxZmHFqYQYyyWebah1m9aF-b-DNRxbnZRJP1EM5MW48XEUj2VH-G5k4oIr-JLWcd49eJUXEbpQf-EgEbzkEF3v2eQJ2HdQ0W1Vt-lTDemb1Xdd7hxZnfsQFSyvsS3ez9Dq7FoC-hgvx9p9WqdcbuiGzqF-mm1JtptSA4J5opo866_0L3RcbxJEzd4fb1LuA4ovCGmZxBpdxTLzMn2UlyRMNtASFNbpPo5ES8jiCdSZ01UziL6o_mXPr130Cwk9mhuV9tHDLupbK9VtA2R3NB4Dx9Hnd0iDdLudGIjID2G-e3k2N8
*/
