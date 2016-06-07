import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.HashMap;
import java.util.Hashtable;
import java.util.Map;

import javax.xml.bind.annotation.adapters.HexBinaryAdapter;

import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.nodes.Element;

public class MyNet {
	public static void F(String url) {
		try {

		} catch (Exception e) {
			System.err.println(e.getMessage());
		}
	}

	public static void main(String[] args) {
		try {

			Map<String, String> headers = new HashMap<>();
			// cookies.put("s14_7up60", "1443207677_0");
			// __VIEWSTATEGENERATOR
			// __VIEWSTATE
			// page = 3
			// currentView = 1
			String link = "http://www.thuocbietduoc.com.vn/nhom-thuoc-5-4/huong-tam-than.aspx";
			Document doc = Jsoup.connect(link).get();

			Element __VIEWSTATE = doc.getElementById("__VIEWSTATE");
			//headers.put("__VIEWSTATE", __VIEWSTATE.attr("value"));

			Element __EVENTVALIDATION = doc.getElementById("__EVENTVALIDATION");
			//headers.put("__EVENTVALIDATION", __EVENTVALIDATION.attr("value"));

			Element __VIEWSTATEGENERATOR = doc.getElementById("__VIEWSTATEGENERATOR");
			//headers.put("__VIEWSTATEGENERATOR", __VIEWSTATEGENERATOR.attr("value"));

			//headers.put("Drugnews1:Gr1", "Rdrgnm");
			//headers.put("currentView", "1");
			headers.put("page", "2");
			//headers.put("__VIEWSTATEENCRYPTED", "");
			//headers.put("Drugnews:AtxtKeyword", "");

		
			String params = "";
			for (Map.Entry<String, String> h : headers.entrySet()) {
				if (params.isEmpty()) {
					params += h.getKey() + "=" + h.getValue();
				} else {
					params += ("&" + h.getKey() + "=" + h.getValue());
				}
			}
			System.out.println(params);
			// ===========================================================
			/*
			Document doc2 = Jsoup.connect(link+"?"+params).post();
		System.out.println(doc2.html());
				*/
			HttpURLConnection conn = (HttpURLConnection) new URL(link).openConnection();

			// Cài đặt header
			conn.setRequestMethod("POST");

			// Gửi request
			// Cái này dùng để ghi data (tham số) cho cả POST và GET
			conn.setDoOutput(true);
			OutputStreamWriter writer = new OutputStreamWriter(conn.getOutputStream());

			writer.write(params);
			writer.flush();
			writer.close();

			// Đọc response
			BufferedReader reader = new BufferedReader(new InputStreamReader(conn.getInputStream()));
			StringBuilder content = new StringBuilder();
			String line;
			while ((line = reader.readLine()) != null)
				content.append(line + "\n");
			reader.close();

			// Content
			String html = content.toString();
			MyUtils.WriteToFile("page2.html", html);
			System.out.println(html);
			System.out.println("ok");
		
		} catch (Exception e) {
			// TODO: handle exception
		}
	}
}
