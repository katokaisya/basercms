<?php
declare(strict_types=1);

use BaserCore\Database\Migration\BcSeed;

/**
 * Pages seed.
 */
class PagesSeed extends BcSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'contents' => '<h2>baserCMSサンプルテーマ</h2>

<p>これは、baserCMSのサンプルテーマです。<br>
トップページのこの部分は、固定ページで作られており、NEWS と baserCMS最新情報の部分は、テンプレートで作成されています。<br>
変更する場合は、/Elements/top_info.php を変更してください。</p>

<h3>グローバルメニューについて</h3>

<p>グローバルメニューは、管理画面の [コンテンツ管理] のツリー構造と連動しています。ツリー構造上においてドラック＆ドロップで並び替えることができ、グローバルメニューに表示したくない場合は、対象コンテンツの編集画面より、[オプション] を開き、[公開ページのメニューより除外する] を選択し保存してください。</p>

<p>また、グローバルメニュー部分を変更する場合は、/Elements/header.php を編集してください。</p>

<h3>サイドバーについて</h3>

<p>サイドバーはウィジェットエリア機能を利用して作られています。管理画面の [設定] &rarr; [ユーティリティ] &rarr; [ウィジェットエリア] より、カスタマイズが可能です。ブログでは「ブログサイドバー」を利用していますが、それ以外のコンテンツでは、「標準サイドバー」を利用しています。</p>

<p>サイト基本設定は、各ブログの [設定] より利用するウィジェットエリアを変更することができます。</p>

<p>また、サイドバー部分を変更する場合は、/Elements/widget_area.php を編集してください。</p>

<h3>初期データについて</h3>

<p>このサンプルテーマは２つの初期データを提供しています。現在利用しているものは「default」でサンプルのデータが入っているものになります。</p>

<p>サンプルデータを入っていないものを利用したい場合は、テーマ管理より「empty」を選択し「初期データ読込」ボタンをクリックしてください。</p>',
                'draft' => '',
                'page_template' => '',
                'modified' => NULL,
                'created' => NULL,
            ],
            [
                'id' => 2,
                'contents' => '<h2>会社案内</h2>

<h3>会社データ</h3>

<table>
<tbody>
<tr>
<th>会社名</th>
<td>baserCMSサンプル</td>
</tr>
<tr>
<th>設立</th>
<td>2020年9月</td>
</tr>
<tr>
<th>所在地</th>
<td>福岡県福岡市</td>
</tr>
<tr>
<th>事業内容</th>
<td>
<ul>
<li>事業内容１</li>
<li>事業内容２</li>
<li>事業内容３</li>
</ul>
</td>
</tr>
</tbody>
</table>

<h3>アクセスマップ</h3>
<?php $this->BcBaser->googleMaps(["width" => 585]) ?>',
                'draft' => '',
                'page_template' => '',
                'modified' => NULL,
                'created' => NULL,
            ],
            [
                'id' => 3,
                'contents' => '<h2>サービス１</h2>

<p>サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。</p>

<p>サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。</p>

<p>サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。</p>',
                'draft' => '',
                'page_template' => '',
                'modified' => NULL,
                'created' => NULL,
            ],
            [
                'id' => 5,
                'contents' => '<h1>見出し１</h1>

<p>段落の文章が入ります。<span>段落の文章が入ります。段落の文章が入ります。段落の文章が入ります。段落の文章が入ります。段落の文章が入ります。段落の文章が入ります。段落の文章が入ります。段落の文章が入ります。段落の文章が入ります。段落の文章が入ります。</span></p>

<h2>見出し２</h2>

<ul>
<li>リスト１</li>
<li>リスト２</li>
<li>リスト３</li>
</ul>

<h3>見出し３</h3>

<ol>
<li>連番リスト１</li>
<li><span>連番リスト２</span></li>
<li><span>連番リスト３</span></li>
</ol>

<h4>見出し４</h4>

<p><strong>太字文章が入ります。太字文章が入ります。太字文章が入ります。太字文章が入ります。</strong></p>

<h5>見出し５</h5>

<p><em>斜体文章が入ります。斜体文章が入ります。斜体文章が入ります。斜体文章が入ります。</em></p>

<h6>見出し６</h6>

<p><u>下線付文章が入ります。下線付文章が入ります。下線付文章が入ります。下線付文章が入ります。</u></p>

<table>
<tbody>
<tr>
<th>表見出し</th>
<td><span>表の文章が入ります。</span></td>
</tr>
<tr>
<th>表見出し</th>
<td>表の文章が入ります。</td>
</tr>
<tr>
<th>表見出し</th>
<td><span>表の文章が入ります。</span></td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>',
                'draft' => '',
                'page_template' => '',
                'modified' => NULL,
                'created' => NULL,
            ],
            [
                'id' => 6,
                'contents' => '<h2>サービス２</h2>

<p>サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。</p>

<p>サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。</p>

<p>サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。</p>',
                'draft' => '',
                'page_template' => '',
                'modified' => NULL,
                'created' => NULL,
            ],
            [
                'id' => 7,
                'contents' => '<h2>サービス３</h2>

<p>サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。</p>

<p>サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。</p>

<p>サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。 サービスの案内文がはいります。サービスの案内文がはいります。サービスの案内文がはいります。</p>',
                'draft' => '',
                'page_template' => '',
                'modified' => NULL,
                'created' => NULL,
            ],
        ];

        $table = $this->table('pages');
        $table->insert($data)->save();
    }
}