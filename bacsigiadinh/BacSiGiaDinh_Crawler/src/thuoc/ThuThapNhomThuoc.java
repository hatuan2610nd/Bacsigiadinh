package thuoc;

import java.util.ArrayList;
import java.util.List;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;
import org.jsoup.select.Elements;

import mta.th10.bacsigiadinh.models.NhomThuoc;

public class ThuThapNhomThuoc {
	public static final String url = "http://www.thuocbietduoc.com.vn/nhom-thuoc-1-0/thuoc-gay-te-me.aspx";

	public static void main(String[] args) {
		try {
			List<NhomThuoc> list = new ArrayList<NhomThuoc>();
			Document doc = Jsoup.connect(url).get();
			Elements tags = doc.getElementsByClass("textpldl");

			for (Element e : tags) {
				if (e.tagName().equals("a")) {
					NhomThuoc t = new NhomThuoc();
					list.add(t);

					t.setTenNhomThuoc(e.ownText());
					t.setId(String.format("N%02d", list.size()));

					if (list.size() == 1)
						t.setUrl("http://www.thuocbietduoc.com.vn/nhom-thuoc-1-0/thuoc-gay-te-me.aspx");
					else
						t.setUrl("http://www.thuocbietduoc.com.vn/" + e.attr("href").substring(3));

				}
			}

			for (NhomThuoc n : list) {
				Document content = Jsoup.connect(n.getUrl()).get();
				Elements elements = content.getElementsByTag("b");
				if (elements != null && elements.size() > 0) {
					if (n.getId().equals("N09"))
						n.setSoTrang(1);
					else if (elements.size() == 4)
						n.setSoTrang(Integer.parseInt(elements.get(3).text()));
					else
						n.setSoTrang(Integer.parseInt(elements.get(1).text()));
				}
			}

			DBThuoc db = DBThuoc.getInstance();
			db.add(list);

		} catch (Exception e) {
			e.printStackTrace();
		}
	}
}
